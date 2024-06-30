<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function home()
    
    {
        return view('Events.home');
    }
    
}