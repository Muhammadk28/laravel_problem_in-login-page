<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class kayesController extends Controller
{
    public function index() {
        return view('index');
    }
    public function details(){
        return view('product_details');
    }
    public function product(){
        return view('product');
    }
    public function check(){
        return view('checkout');
    }
    public function cart(){
        return view('cart');
    }
    public function login(){
        return view('login');
    }
}
