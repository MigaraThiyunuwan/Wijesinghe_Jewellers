<?php

namespace App\Http\Controllers;

use App\Models\Advertisement;
use App\Models\GemBusiness;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class GemBusinessController extends Controller
{

    public function profile()
    {
        $gemBusiness = session()->get('gemBusiness');
        $advertisement = new Advertisement();
        $myAddList = $advertisement->getSpecificAdd($gemBusiness->id);
        return view('GemBusinessOwner.profile', compact('myAddList'));
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

    public function putadvertisement()
    {
        return view('GemBusinessOwner.putAdvertisement');
    }

    public function advertisement()
    {
        $advertisement = new Advertisement();
        $addList = $advertisement->getAdvertisementList();
        return view('GemBusinessOwner.advertisements', compact('addList'));
    }

    public function gemdetails($gemId)
    {
        $advertisement = new Advertisement();
        $gem = $advertisement->getAddDetail($gemId);
        return view('GemBusinessOwner.gemdetails', compact('gem'));
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

    public function putadvertisements(Request $request)
    {
        $rules = [
            'gem_business_id' => 'required|exists:gem_businesses,id',
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:500',
            'price' => 'required|numeric|between:0,99999999.99',
            'image' => 'required|file|mimes:jpg,png,jpeg|max:2048',
            'shape' => 'required|string|max:255',
            'carat' => 'required|numeric|between:0,99999.99',
            'width' => 'required|numeric|between:0,999.99',
            'length' => 'required|numeric|between:0,999.99',
            'contact_no' => 'required|string|max:20'
           
        ];

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // advertisements

        $tempAdvertisement = new Advertisement();
        $advertisement = $tempAdvertisement->addAdvertisement($request);
        $file = $request->file('image');
        $business_id = $request->gem_business_id;
        $fileName = $business_id . '_' . $advertisement->id . '.' . $file->getClientOriginalExtension();
        $filePath = $file->storeAs('public/advertisements', $fileName);
        $advertisement->image = 'advertisements/' . $fileName;
        $advertisement->save();

        if($advertisement)
        {
            return redirect()->route('gem.add')->with('success', 'You have posted advertisement successfully');
        }else{
            return redirect()->route('gem.add')->with('unsuccess', 'Advertisement posting Failed');
        }
    }
    public function delete(Request $request)
    {
        $advertisement = new Advertisement();
        $advertisement->deleteAdvertisement($request->id);
        return redirect()->route('gem.profile')->with('success', 'Advertisement deleted successfully');
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