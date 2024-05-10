<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{

    public function register()
    {
        return view('user.register');
    }

    public function login()
    {
        return view('user.login');
    }

    public function save(Request $request)
    {
        $rules = [
            'first_name' => 'required|string|max:255',
            'username' => 'required|string|max:255',
            'contact_no' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'email' => 'required|string|email|unique:users|max:255',
            'password' => 'required|string|min:6|confirmed',
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

        $user = User::where('email', $request->email)->first();
        if ($user) {
            if (Hash::check($request->password, $user->password)) {
                return redirect()->route('home');
            }
        }
        //return redirect()->route('login/{error=1}');
        //return redirect()->back()->withErrors($validator)->withInput();
        return redirect()->back()->withErrors(['email' => 'Invalid credentials'])->withInput();
    }
}