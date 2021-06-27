<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        $lists = Product::get();
        $top_product = Product::where('top', 1)->first();
        $color = Product::COLOR;

        return view('front.index', compact('lists', 'top_product'));
    }
    // ->orWhere('sort','')

    public function register()
    {
        return view('front.register');
    }



    public function cartA()
    {
        return view('front.cart.shoppingcart_A');
    }



    public function cartB()
    {
        return view('front.cart.shoppingcart_B');
    }



    public function cartC()
    {
        return view('front.cart.shoppingcart_C');
    }



    public function cartD()
    {
        return view('front.cart.shoppingcart_D');
    }
}
