<?php

namespace App\Http\Controllers;

use App\Models\Manager;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class ManagerController extends Controller
{
    public function profile()
    {
        return view('manager.profile');
    }

    public function register()
    {
        return view('Manager.register');
    }

    public function login()
    {
        return view('manager.login');
    }

    public function managerEdit()
    {
        return view('Manager.edit');
    }
    
    public function save(Request $request)
    {
        $rules = [
            'first_name' => 'string|max:255',
            'last_name' => 'string|max:255',
            'username' => 'string|max:255',
            'contact_no' => 'regex:/^\+?\d{7,15}$/',
            'address' => 'string|max:255',
            'email' => 'string|email|unique:managers|max:255',
            'password' => 'required|confirmed|min:6',
            'nic' => ['required', 'regex:/^[\d]{9}[VX]{1}|[\d]{12}$/'], 
           
        ];

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        
        $manager = new Manager();
        $manager->first_name = $request->first_name;
        $manager->last_name = $request->last_name;
        $manager->username = $request->username;
        $manager->address = $request->address;
        $manager->nic = $request->nic;
        $manager->contact_no = $request->contact_no;
        $manager->email = $request->email;
        $manager->password = Hash::make($request->password);

        $manager->save();
        return redirect()->route('home');
        
    }


    public function loginmanager(Request $request)
    {

        $rules = [
            'email' => 'required|string|email|max:255',
            'password' => 'required|string',
        ];

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        //Call login function in manager model
        $manager = new Manager();
        $loggedInManager = $manager->login($request->email, $request->password);

        if ($loggedInManager) {
            Session::flush();
            $request->session()->put('manager', $loggedInManager);
            return redirect()->route('manager.profile');
        }

        return redirect()->back()->withErrors(['email' => 'Invalid credentials'])->withInput();
    }

    public function update(Request $request)
    {
        $rules = [
            'first_name' => 'string|max:255',
            'last_name' => 'string|max:255',
            'username' => 'string|max:255',
            'contact_no' => 'regex:/^\+?\d{7,15}$/',
            'address' => 'string|max:255',
            'email' => 'string|email|max:255',
            'nic' => ['regex:/^[\d]{9}[VX]{1}|[\d]{12}$/'], 
           
        ];

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $oldManager = session()->get('manager');
        $manager = $oldManager->editDetails(
            
            $request->input('first_name'),
            $request->input('last_name'),
            $request->input('username'),
            $request->input('email'),
            $request->input('address'),
            $request->input('contact_no')
        );
        
        $request->session()->put('manager', $manager);
        return redirect()->route('manager.profile');
    
    
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

        $odlManager = session()->get('manager');
        $manager = $odlManager->changepassword($request->input('new_password'));
        if ($manager) {
            $request->session()->put('manager', $manager);
            return redirect()->route('manager.profile');
        }
    }

    
    
}