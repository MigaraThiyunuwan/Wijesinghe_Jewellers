<?php

namespace App\Http\Controllers;

use App\Models\GemBusiness;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class GemBusinessController extends Controller
{

    public function profile()
    {
        return view('GemBusinessOwner.profile');
    }
    
    public function register()
    {
        return view('GemBusinessOwner.register');
    }

    public function login()
    {
        return view('GemBusinessOwner.login');
    }

    public function edit()
    {
        return view('GemBusinessOwner.edit');
    }
    // function for handling register new Grm Business
    public function save(Request $request)
    {
        $rules = [
            'market_name' => 'string|max:255',
            'business_num' => 'string|max:255',
            'owner_name' => 'required|string|max:255',
            'gem_asso_num' => 'required|string|max:255',
            'certificate_image' => 'required|file|mimes:jpg,png,jpeg|max:2048',
            'contact_no' => 'required|regex:/^\+?\d{7,15}$/',
            'address' => 'required|string|max:255',
            'email' => 'string|email|unique:gem_businesses|max:255',
            'password' => 'required|confirmed|min:6',
           
        ];

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        
        $tempGemBusiness = new GemBusiness();
        //call register function
        $gemBusiness = $tempGemBusiness->register($request);
        $ownerId = $gemBusiness->id;
        $file = $request->file('certificate_image');
        $fileName = $ownerId . '.' . $file->getClientOriginalExtension();
        $filePath = $file->storeAs('public/uploads', $fileName);
        $gemBusiness->certificate_image = 'uploads/' . $fileName;
        $gemBusiness->verified = 'false';
        $gemBusiness->save();

        if($gemBusiness)
        {
            $request->session()->put('gemBusiness', $gemBusiness);
            return redirect()->route('gem.profile')->with('success', 'You have registered successfully');
        }else{
            return redirect()->route('gem.register')->with('unsuccess', 'Registration Failed');
        }
    }

    // function for handling gem business login
    public function logingem(Request $request)
    {
        $rules = [
            'email' => 'required|string|email|max:255',
            'password' => 'required|string',
        ];
        
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        //Call login function in GemBusiness model
        $gemBusiness = new GemBusiness();
        $logedGemBusiness = $gemBusiness->login($request->email, $request->password);
        
        if ($logedGemBusiness) {
            Session::flush();
            $request->session()->put('gemBusiness', $logedGemBusiness);
            return redirect()->route('gem.profile');
        }

        return redirect()->back()->withErrors(['email' => 'Invalid credentials'])->withInput();
    }

    public function editdetails(Request $request)
    {
        $rules = [
            'owner_name' => 'required|string|max:255',
            'contact_no' => 'required|regex:/^\+?\d{7,15}$/',
            'address' => 'required|string|max:255',
            'email' => 'string|email|max:255',
            'time_from' => 'required',
            'time_to' => 'required',
        ];

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $gemBusiness = session()->get('gemBusiness');
        $newGembusiness = $gemBusiness->editDetails($request);
        $request->session()->put('gemBusiness', $newGembusiness);
        return redirect()->route('gem.profile')->with('success', 'Details updated successfully');
    }

    public function changepassword(Request $request)
    {
        $rules = [
            'password' => 'required|confirmed|min:6',
            'new_password' => 'required|min:6',
        ];

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $gemBusiness = session()->get('gemBusiness');
        $newPassword = $request->input('new_password');
        $gemBusiness = $gemBusiness->changePassword($newPassword);
        $request->session()->put('gemBusiness', $gemBusiness);
        return redirect()->route('gem.profile')->with('success', 'Password changed successfully');
    }
}