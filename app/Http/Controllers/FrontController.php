<?php

namespace App\Http\Controllers;

use App\News;
use App\Product;
use App\ProductType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class FrontController extends Controller
{
    public function index()
    {
        $lists = Product::get();
        $top_product = Product::where('top', 1)->first();
        $color = Product::COLOR;

        $newslists = News::get();

        return view('front.index', compact('lists', 'top_product', 'newslists'));
    }


    // get也可以留參數!
    public function product(Request $request)
    // public function product()
    {
        $types = ProductType::get();

        if ($request->type_id) {
            $products = Product::where('product_type_id', $request->type_id)->get();
        } else {
            $products = Product::get();
        }

        return view('/front/product/index', compact('products', 'types'));
    }



    // 購物車  --------------------------------------
    public function cartA()
    {
        $cartProducts = \Cart::getContent()->sortKeys();
        return view('front.cart.shoppingcart_A', compact('cartProducts'));
    }



    public function cartB()
    {
        $qty = \Cart::getTotalQuantity();
        $subTotal = \Cart::getSubTotal();
        $shippingFee = \Cart::getSubTotal() > 1000 ? 0 : 60;
        $total =  $subTotal + $shippingFee;

        return view('front.cart.shoppingcart_B', compact('qty', 'subTotal', 'shippingFee', 'total'));
    }

    public function paymentCheck(Request $request)
    {
        Session::put('payment', $request->payment);
        Session::put('shipment', $request->shipment);

        return redirect('cart/cartC');
    }




    public function cartC()
    {
        if (Session::has('payment') && Session::has('shipment')) {
            $qty = \Cart::getTotalQuantity();
            $subTotal = \Cart::getSubTotal();
            $shippingFee = \Cart::getSubTotal() > 1000 ? 0 : 60;
            $total =  $subTotal + $shippingFee;

            return view('front.cart.shoppingcart_C', compact('qty', 'subTotal', 'shippingFee', 'total'));
        } else {
            return redirect('cart/cartB');
        }
    }

    public function cartD()
    {
        return view('front.cart.shoppingcart_D');
    }





    // 註冊  --------------------------------------
    public function register()
    {
        return view('front.register');
    }




    // 其他  --------------------------------------
    public function add(Request $request)
    {
        $product = Product::find($request->productId);
        \Cart::add(array(
            'id' => $product->id,
            'name' => $product->product_name,
            'price' => $product->price,
            'quantity' => 1,
            'attributes' => array(
                'photo' => $product->photo
            )
        ));

        return 'success';
    }

    public function update(Request $request)
    {
        \Cart::update($request->productId, array(
            'quantity' => array(
                'relative' => false,
                'value' => $request->newQty
            ),
        ));
        return 'success';
    }

    public function content()
    {
        $cartCollection = \Cart::getContent();
        dd($cartCollection);
    }

    public function clear()
    {
        \Cart::clear();
        return 'sucess';
    }
}
