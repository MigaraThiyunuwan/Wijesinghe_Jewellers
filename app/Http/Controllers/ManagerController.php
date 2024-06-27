<?php

namespace App\Http\Controllers;

use App\Models\GemBusiness;
use App\Models\Item;
use App\Models\Manager;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class ManagerController extends Controller
{
    public function profile()
    {
        // Get unverified businesses from session
        // $unverifiedBusinesses = session('unverifiedBusinesses', []);

        $unverifiedBusinesses = GemBusiness::getUnverifiedBusinesses();
        $userList = User::getAllUsers();
        $orderList = Order::getAllOrders();
        $item = new Item();
        $orderItem = new OrderItem();
        return view('manager.profile', compact('unverifiedBusinesses','userList','orderList','item','orderItem'));
    }

    public function users()
    {
        $unverifiedBusinesses = GemBusiness::getUnverifiedBusinesses();
        $userList = User::getAllUsers();
        return view('manager.users', compact('unverifiedBusinesses','userList'));
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
        $manager = session()->get('manager');
        //call addNewManager function in Manager Model
        if($manager->addNewManager($request)) 
        {
            return redirect()->route('manager.profile')->with('managerSuccess', 'Manager added successfully!');
        }else{
            return redirect()->route('manager.profile')->with('managerError', 'Manager adding Failed!');
        }
           
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

    public function confirm(Request $request, $business_id)
    {
        $rules = [
            'decision'=>'required|string',
            
        ];
        $validator = Validator::make($request->all(),$rules);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // $student = Student::where('id',$student_id)->first();
        $business = GemBusiness::where('id',$business_id)->first();
        $business->verified =  $request->decision;
        $business->save();
        
        return redirect()->route('manager.profile');
    }
    
    public function deleteuser(Request $request)
    {
        $rules = [
            'user_id' => 'required',
        ];
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $user = User::where('id',$request->user_id)->first();
        if($user){
            $user->delete();
            $unverifiedBusinesses = GemBusiness::getUnverifiedBusinesses();
            $userList = User::getAllUsers();
            return view('manager.profile', compact('unverifiedBusinesses','userList'));
        }else{
            return redirect()->route('manager.profile')->with('managerError', 'User not found!');
        }
    }
    
}