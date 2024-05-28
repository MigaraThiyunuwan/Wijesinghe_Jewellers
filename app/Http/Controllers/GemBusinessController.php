<?php

namespace App\Http\Controllers;

use App\Models\GemBusiness;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class GemBusinessController extends Controller
{
    public function register()
    {
        return view('GemBusinessOwner.register');
    }

    public function login()
    {
        return view('GemBusinessOwner.login');
    }

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
        $gemBusiness = $tempGemBusiness->register($request);
        $ownerId = $gemBusiness->id;
        $file = $request->file('certificate_image');
        $fileName = $ownerId . '.' . $file->getClientOriginalExtension();
        $filePath = $file->storeAs('uploads', $fileName);
        $gemBusiness->certificate_image = $filePath;
        $gemBusiness->save();

        if($gemBusiness)
        {
            $request->session()->put('gemBusiness', $gemBusiness);
            return redirect()->route('user.profile')->with('success', 'You have registered successfully');
        }else{
            return redirect()->route('user.register')->with('unsuccess', 'Registration Failed');
        }
    }
}