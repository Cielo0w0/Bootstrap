<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        $lists = Product::get();
        $color = Product::COLOR;
        $top = Product::TOP;
        // $size = Product::SIZE;

        return view('front.index',compact('lists'));
    }



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
