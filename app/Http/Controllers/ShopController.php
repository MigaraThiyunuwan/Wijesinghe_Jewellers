<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function necklaces()
    {
        return view('shop.necklaces');
    }

    public function productDetails()
    {
        return view('shop.productDetails');
    }
}