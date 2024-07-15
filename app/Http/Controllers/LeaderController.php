<?php

namespace App\Http\Controllers;

use App\Models\CustomizeRequest;
use App\Models\Leader;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class LeaderController extends Controller
{
    public function register()
    {
        return view('Leader.leaderRegister');
    }

    public function save(Request $request)
    {
        $leader = new Leader();
        $leader->Register($request);

        return redirect()->route('manager.profile')->with('managerSuccess', 'Leader added successfully!');
    }

    public function profile()
    {
        $customizeRequest = new CustomizeRequest();
        $requests = $customizeRequest->getAllRequest();
        return view('Leader.profile', compact('requests'));
    }

    public function edit()
    {
        return view('Leader.edit');
    }

    public function update(Request $request)
    {
        $rules = [
            'first_name' => 'string|max:255',
            'last_name' => 'string|max:255',
            'contact_no' => 'regex:/^\+?\d{7,15}$/',
            'address' => 'string|max:255',
            'email' => 'string|email|max:255',
            'nic' => ['regex:/^[\d]{9}[VX]{1}|[\d]{12}$/'], 
           
        ];

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $oldLeader = session()->get('leader');
        $leader = $oldLeader->editDetails(
            
            $request->input('first_name'),
            $request->input('last_name'),
            $request->input('email'),
            $request->input('address'),
            $request->input('contact_no')
        );
        
        $request->session()->put('leader', $leader);
        return redirect()->route('leader.profile')->with('leaderSuccess', 'Details Updated!');
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

        $oldLeader = session()->get('leader');
        $leader = $oldLeader->changepassword($request->input('new_password'));
        if ($leader) {
            $request->session()->put('leader', $leader);
            return redirect()->route('leader.profile')->with('leaderSuccess', 'Password Updated!');
        }
    }

    public function chat($cus_req_id)
    {   
        //$cus_req_id = 1;
        $request = new CustomizeRequest();
        $user = new User();
        $request = $request->getCustomReq($cus_req_id);
        $user = $user->getUser($request->user_id);
        
        return view('Leader.chat', compact('cus_req_id', 'request', 'user'));
        
    }
}