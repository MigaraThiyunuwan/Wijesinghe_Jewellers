<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function profile()

    {
        // $user = $request->session()->get('user');
        // return view('user.profile', ['user' => $user]);
        
        $user = session()->get('user');
        if($user)
        {
            $order = new Order();
            $orderList = $order->getOrderList($user->id);
            return view('user.profile', compact('orderList'));
            
        }
        
    }

    public function register()
    {
        return view('user.register');
    }


    public function userEdit()
    {
        return view('user.edit');
    }

    public function chat()
    {
        return view('chat');
    }

    public function customizeform()
    {
        return view('user.customizeform');
    }
    // function for handling register new user
    public function save(Request $request)
    {
        $rules = [
            'first_name' => 'required|string|max:255',
            'last_name' => 'string|max:255',
            'username' => 'required|string|max:255',
            'contact_no' => 'regex:/^\+?\d{7,15}$/',
            'address' => 'string|max:255',
            'email' => 'required|string|email|unique:users|max:255',
            'password' => 'required|confirmed|min:6',

        ];

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $tempUser = new User();
        $user = $tempUser->register($request);
        if($user)
        {
            $request->session()->put('user', $user);
            return redirect()->route('user.profile')->with('success', 'You have registered successfully');
        }else{
            return redirect()->route('user.register')->with('unsuccess', 'Registration Failed');
        }

    }

    // function for handling update user details
    public function update(Request $request)
    {
        $rules = [
            'first_name' => 'string|max:255',
            'last_name' => 'string|max:255',
            'username' => 'string|max:255',
            'contact_no' => 'regex:/^\+?\d{7,15}$/',
            'address' => 'string|max:255',
            'email' => 'string|email|max:255',

        ];

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $oldUser = session()->get('user');
        $user = $oldUser->editDetails(

            $request->input('first_name'),
            $request->input('last_name'),
            $request->input('username'),
            $request->input('email'),
            $request->input('address'),
            $request->input('city'),
            $request->input('country'),
            $request->input('contact_no'),
            $request->input('about')
        );

        $request->session()->put('user', $user);
        return redirect()->route('user.profile');
    }

    
    public function changepassword(Request $request)
    {
        $rules = [

            'password' => 'required|confirmed|min:6',
            'new_password' => 'required|min:6',

        ];

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }

        $oldUser = session()->get('user');
        $user = $oldUser->changepassword($request->input('new_password'));
        if ($user) {
            $request->session()->put('user', $user);
            return redirect()->route('user.profile');
        }
    }
}