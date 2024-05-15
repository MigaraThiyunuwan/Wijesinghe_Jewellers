<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Session;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function home(){
        return view('home');
    }

    // Controller method to delete sessions when any user logout
    public function logout()
    {
        Session::flush();
        return redirect()->route('home');
    }

    public function aboutus(){
        return view('aboutus');
    }


    public function contactus(){
        return view('contactus');
    }



}
