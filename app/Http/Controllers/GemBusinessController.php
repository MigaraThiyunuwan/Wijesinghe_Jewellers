<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GemBusinessController extends Controller
{
    public function register()
    {
        return view('GemBusinessOwner.register');
    }
}