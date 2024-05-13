<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{

    public function profile()

    {
        // $user = $request->session()->get('user');
        // return view('user.profile', ['user' => $user]);
        return view('user.profile');
    }

    public function register()
    {
        return view('user.register');
    }

    public function login()
    {
        return view('user.login');
    }

    public function userEdit()
    {
        return view('user.edit');
    }

    // function for handling register new user
    public function save(Request $request)
    {
        $rules = [
            'first_name' => 'string|max:255',
            'last_name' => 'string|max:255',
            'username' => 'string|max:255',
            'contact_no' => 'regex:/^\+?\d{7,15}$/',
            'address' => 'string|max:255',
            'email' => 'string|email|unique:users|max:255',
            'password' => 'required|confirmed|min:6',

        ];

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $user = new User();
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->username = $request->username;
        $user->address = $request->address;
        $user->city = $request->city;
        $user->country = $request->country;
        $user->contact_no = $request->contact_no;
        $user->about = $request->about;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        $user->save();
        return redirect()->route('home');
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

    // function for handling user login
    public function loginuser(Request $request)
    {

        $rules = [
            'email' => 'required|string|email|max:255',
            'password' => 'required|string',
        ];

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        //Call login function in user model
        $user = new User();
        $loggedInUser = $user->login($request->email, $request->password);

        if ($loggedInUser) {
            $request->session()->put('user', $loggedInUser);
            return redirect()->route('user.profile');
        }

        return redirect()->back()->withErrors(['email' => 'Invalid credentials'])->withInput();
    }
}
