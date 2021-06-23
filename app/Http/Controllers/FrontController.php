<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        return view('front.index');
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
