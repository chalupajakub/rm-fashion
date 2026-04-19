<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home(){
        return view('eshop.home');
    }

        public function productDetail(){
        return view('eshop.product-detail');
    }
}
