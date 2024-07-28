<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\CusGemSize;
use App\Models\CusGemType;
use App\Models\CusMaterial;
use App\Models\CustomizeOrder;
use App\Models\CustomizeRequest;
use App\Models\EventOrder;
use App\Models\Item;
use App\Models\Order;
use App\Models\OrderItem;
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
            $orderItem = new OrderItem();
            $item = new Item();
            $eventOrder = new EventOrder();
            $eventOrderList = $eventOrder->getEventOrderList($user->id);
            $orderList = $order->getOrderList($user->id);
            return view('user.profile', compact('orderList','eventOrderList','orderItem','item'));
            
        }
        
    }

    public function mycustomize()
    {
        $user = session()->get('user');
        if($user)
        {
            $customize_order = new CustomizeOrder();
            $customizerequest = new CustomizeRequest();
            $customizeOrderList = $customize_order->getCustomizeOrderList($user->id);
            return view('user.mycustomize', compact('customizeOrderList','customizerequest'));
        }
    }

    public function customizechat($cus_req_id)
    {   
        //$cus_req_id = 1;
        $request = new CustomizeRequest();
        $request = $request->getCustomReq($cus_req_id);
        return view('User.customizeChat', compact('cus_req_id', 'request'));
        
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

    public function directorders()
    {
        $user = session()->get('user');
        if($user)
        {
            $order = new Order();
            $orderItem = new OrderItem();
            $item = new Item();
            $orderList = $order->getOrderList($user->id);
            return view('User.directOrders', compact('orderList','orderItem','item'));
            
        }
        
    }

    public function eventorders()
    {
        $user = session()->get('user');
        if($user)
        {
            $eventOrder = new EventOrder();
            $eventOrderList = $eventOrder->getEventOrderList($user->id);
            return view('User.eventOrders', compact('eventOrderList'));
            
        }
    }

    public function model(Request $request)
    {
        $cus_req_id = $request->input('cus_req_id');
        $order = new CustomizeOrder();
        $order = $order->getOrderDetail($cus_req_id);
        $user = session()->get('user');
        if($order->user_id == $user->id)
        {
            $request->session()->put('cus_req_id', $cus_req_id);
            return view('User.model');
        }else{
            return redirect()->route('user.mycustomize');
        }
    }

    public function getModelId()
    {
        return response()->json(['cus_req_id' => session('cus_req_id')]);
    }

    public function customizeform()
    {
        $materialList = new CusMaterial();
        $gemTypeList = new CusGemType();
        $gemSizeList = new CusGemSize();
        $gemTypeList = $gemTypeList->getGemList();
        $gemSizeList = $gemSizeList->getSizeList();
        $materialList = $materialList->getMaterialList();
        
        return view('user.customizeform', compact('materialList','gemTypeList','gemSizeList'));
    }

    public function paymentconfirm(Request $request)
    {
        $cus_order = new CustomizeOrder();
        $order = $cus_order->getOrderDetail($request->cus_req_id);
        $request->session()->put('myorder', $order);
        return view('user.paymentconfirm', compact('order'));
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