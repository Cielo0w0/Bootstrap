<?php

namespace App\Http\Controllers;

use App\News;
use App\Order;
use App\OrderDetail;
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




    public function shipmentCheck(Request $request)
    {
        // dd($request->all());

        $cartProducts = \Cart::getContent();

        // $totalPrice = 0;
        // $totalQty = 0;

        // foreach ($cartProducts as $cartProduct) {
        //     $product = Product::find($cartProduct->id);

        //     $totalPrice += $product->prcie * $cartProduct->quantity;
        //     $totalQty += $cartProduct->quantity;
        // }

        $order = Order::create([
            'order_no' => 'DP' . time() . rand(1, 999),
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'county' => $request->county,
            'district' => $request->district,
            'zipcode' => $request->zipcode,
            'address' => $request->address,
            'price' => 9999999,
            // 'price' => $totalPrice,
            'pay_type' => Session::get('payment'),
            'shipping' => Session::get('shipment'),
            'shipping_fee' => 99999999,
            // 'shipping_fee' => $totalPrice > 1000 ? 0 : 60,
            'shipping_status_id' => 0,
            'order_status_id' => 0,

        ]);

        $totalPrice = 0;
        foreach ($cartProducts as $cartProduct) {
            $product = Product::find($cartProduct->id);
            $totalPrice += $product->price * $cartProduct->quantity;

            OrderDetail::create([
                'order_id' => $order->id,
                'product_id' => $product->id,
                'qty' => $cartProduct->quantity,
                'old' => json_encode($product),
            ]);
        }

        $order->update([
            'price' => $totalPrice,
            'shipping_fee' => $totalPrice > 1000 ? 0 : 60,
        ]);

        Session::forget('payment');
        Session::forget('shipment');
        \Cart::clear();

        return redirect('cart/cartD')->with('order', $order);
    }


    public function cartD()
    {
        if (Session::has('order')) {
            return view('front.cart.shoppingcart_D');
        } else {
            return redirect('/');
        }
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

    public function delete(Request $request)
    {
        \Cart::remove($request->productId);
        return 'sucess';
    }
}
