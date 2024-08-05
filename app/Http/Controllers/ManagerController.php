<?php

namespace App\Http\Controllers;

use App\Models\CusGemPrice;
use App\Models\CusGemSize;
use App\Models\CusGemType;
use App\Models\CusMaterial;
use App\Models\Event;
use App\Models\EventOrder;
use App\Models\GemBusiness;
use App\Models\Item;
use App\Models\Leader;
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
        $pendingOrderCount = Order::getPendingOrderCount();
        $UnVerifiedbusiness = GemBusiness::getUnVerifiedGemBusiness();
        $ordertobedelivered = Order::getorderstobedeliveredCount();
        $userCount = User::getUserCount();
        $deliveredOrders = Order::getDeliveredOrderCount();
        $income = Order::getTotalIncome();
        $verifiedGemBusiness = GemBusiness::getVerifiedGemBusinessCount();
        $allUserCount = User::getAllUserCount();
        $leaderCount = Leader::getLeaderCount();
        $materialList = CusMaterial::getMaterialList();
        $gemList = CusGemType::getGemList();
        $gemSizeList = CusGemSize::getSizeList();
        $eventOrder = new EventOrder();
        $eventObj = new Event();
        $eventOrderList = $eventOrder->getAllOrders();

        $data = compact(
                    'unverifiedBusinesses',
                    'userList',
                    'orderList',
                    'item',
                    'orderItem',
                    'pendingOrderCount',
                    'UnVerifiedbusiness',
                    'ordertobedelivered',
                    'userCount',
                    'deliveredOrders',
                    'income',
                    'verifiedGemBusiness',
                    'allUserCount',
                    'materialList',
                    'gemList',
                    'gemSizeList',
                    'leaderCount',
                    'eventOrderList',
                    'eventObj'
                );

        return view('manager.profile', $data);
       // return view('manager.profile', compact('unverifiedBusinesses','userList','orderList','item','orderItem','pendingOrderCount','UnVerifiedbusiness','ordertobedelivered'));
    }

    public function managertest()
    {
        $unverifiedBusinesses = GemBusiness::getUnverifiedBusinesses();
        $userList = User::getAllUsers();
        $orderList = Order::getAllOrders();
        $item = new Item();
        $orderItem = new OrderItem();
        $pendingOrderCount = Order::getPendingOrderCount();
        $UnVerifiedbusiness = GemBusiness::getUnVerifiedGemBusiness();
        $ordertobedelivered = Order::getorderstobedeliveredCount();
        $userCount = User::getUserCount();
        $deliveredOrders = Order::getDeliveredOrderCount();
        $income = Order::getTotalIncome();
        $verifiedGemBusiness = GemBusiness::getVerifiedGemBusinessCount();
        $allUserCount = User::getAllUserCount();
        $leaderCount = Leader::getLeaderCount();
        $materialList = CusMaterial::getMaterialList();
        $gemList = CusGemType::getGemList();
        $gemSizeList = CusGemSize::getSizeList();
        $eventOrder = new EventOrder();
        $eventObj = new Event();
        $eventOrderList = $eventOrder->getAllOrders();

        $data = compact(
                    'unverifiedBusinesses',
                    'userList',
                    'orderList',
                    'item',
                    'orderItem',
                    'pendingOrderCount',
                    'UnVerifiedbusiness',
                    'ordertobedelivered',
                    'userCount',
                    'deliveredOrders',
                    'income',
                    'verifiedGemBusiness',
                    'allUserCount',
                    'materialList',
                    'gemList',
                    'gemSizeList',
                    'leaderCount',
                    'eventOrderList',
                    'eventObj'
                );
        return view('Manager.managertest', $data);
    }

    public function users()
    {
        $userList = User::getAllUsers();
        return view('manager.users', compact('userList'));
    }

    public function gembusiness()
    {
        $verifiedBusinesses = GemBusiness::getVerifiedBusinesses();
        return view('Manager.gemBusiness', compact('verifiedBusinesses'));
    }
    
    public function leaders()
    {
        $leaderList = Leader::getAllLeaders();
        return view('Manager.teamLeaders', compact('leaderList'));
    }

    public function managers()
    {
        $managerList = Manager::getManagerList();
        return view('Manager.managers', compact('managerList'));
    }

    public function pendingrequest()
    {
        $unverifiedBusinesses = GemBusiness::getUnverifiedBusinesses();
        return view('Manager.pendingRequests', compact('unverifiedBusinesses'));
    }

    public function pendingorders()
    {
        $orderList = Order::getAllOrders();
        $item = new Item();
        $orderItem = new OrderItem();
        $pendingOrderCount = Order::getPendingOrderCount();
        return view('Manager.pendingOrders', compact('orderList','item','orderItem','pendingOrderCount'));
    }

    public function orderstobedelivered()
    {
        $orderList = Order::getAllOrders();
        $item = new Item();
        $orderItem = new OrderItem();
        $ordertobedelivered = Order::getorderstobedeliveredCount();
        return view('Manager.ordersToBeDelivered', compact('orderList','item','orderItem','ordertobedelivered'));
    }

    public function specialorderstobedelivered()
    {
        $orderList = Order::getAllOrders();
        $item = new Item();
        $orderItem = new OrderItem();
        $ordertobedelivered = Order::getorderstobedeliveredCount();
        
        $eventOrder = new EventOrder();
        $eventObj = new Event();
        $eventOrderList = $eventOrder->getAllOrders();
        return view('Manager.specialOrdersToBeDelivered', compact('eventOrder','eventObj','eventOrderList'));
    }

    public function managernecklace()
    {
        $item = new Item();
        $itemList = $item->getListOfCategory('Necklace');
        return view('Manager.necklace', compact('itemList'));
    }

    public function managerbracelet()
    {
        $item = new Item();
        $itemList = $item->getListOfCategory('Bracelet');
        return view('Manager.bracelet', compact('itemList'));
    }

    public function managerearring()
    {
        $item = new Item();
        $itemList = $item->getListOfCategory('Earring');
        return view('Manager.earring', compact('itemList'));
    }

    public function managerring()
    {
        $item = new Item();
        $itemList = $item->getListOfCategory('Ring');
        return view('Manager.ring', compact('itemList'));
    }

    public function pendingeventorders()
    {
        $eventOrder = new EventOrder();
        $eventObj = new Event();
        $eventOrderList = $eventOrder->getAllOrders();
        return view('Manager.pendingEventOrders', compact('eventOrderList','eventObj'));
    }

    public function removeitem(Request $request)
    {
        $rules = [
            'item_id' => 'required',
        ];
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $item = Item::where('id',$request->item_id)->first();
        if($item){
            if($item->deleteItem($request->item_id))
            {
                if ($item->category == 'Necklace') {
                    return redirect()->route('manager.necklace')->with('managerSuccess', 'Item Removed!');
                } elseif ($item->category == 'Earring') {
                    return redirect()->route('manager.earring')->with('managerSuccess', 'Item Removed!');
                } elseif ($item->category == 'Ring') {
                    return redirect()->route('manager.ring')->with('managerSuccess', 'Item Removed!');
                } elseif ($item->category == 'Bracelet') {
                    return redirect()->route('manager.bracelet')->with('managerSuccess', 'Item Removed!');
                }
                
            }
           
        }else{
            return redirect()->route('manager.necklace')->with('managerError', 'Item not found!');
        }
    }

    public function changeQuntity(Request $request)
    {
        $rules = [
            'item_id' => 'required',
            'new_quantity' => 'required|numeric|min:0',
        ];
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $item = Item::where('id',$request->item_id)->first();
        if($item){
            if($item->changeQuantity($item->id, $request->new_quantity))
            {
                if ($item->category == 'Necklace') {
                    return redirect()->route('manager.necklace')->with('managerSuccess', 'Quantity Changed!');
                } elseif ($item->category == 'Earring') {
                    return redirect()->route('manager.earring')->with('managerSuccess', 'Quantity Changed!');
                } elseif ($item->category == 'Ring') {
                    return redirect()->route('manager.ring')->with('managerSuccess', 'Quantity Changed!');
                } elseif ($item->category == 'Bracelet') {
                    return redirect()->route('manager.bracelet')->with('managerSuccess', 'Quantity Changed!');
                }
                
            }
           
        }else{
            return redirect()->route('manager.necklace')->with('managerError', 'Item not found!');
        }
    }

    public function changePrice(Request $request)
    {
        $rules = [
            'item_id' => 'required',
            'new_price' => 'required|numeric|min:0',
        ];
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $item = Item::where('id',$request->item_id)->first();
        if($item){
            if($item->changePrice($item->id, $request->new_price))
            {
                if ($item->category == 'Necklace') {
                    return redirect()->route('manager.necklace')->with('managerSuccess', 'Price Changed!');
                } elseif ($item->category == 'Earring') {
                    return redirect()->route('manager.earring')->with('managerSuccess', 'Price Changed!');
                } elseif ($item->category == 'Ring') {
                    return redirect()->route('manager.ring')->with('managerSuccess', 'Price Changed!');
                } elseif ($item->category == 'Bracelet') {
                    return redirect()->route('manager.bracelet')->with('managerSuccess', 'Price Changed!');
                }
                
            }
           
        }else{
            return redirect()->route('manager.necklace')->with('managerError', 'Item not found!');
        }
    }

    public function register()
    {
        return view('Manager.register');
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
        return redirect()->route('manager.profile')->with('managerSuccess', 'Details Updated successfully!');
    
    
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
            return redirect()->route('manager.profile')->with('managerSuccess', 'Password Changed successfully!');
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
        
        return redirect()->route('manager.profile')->with('managerSuccess', 'Gem bussiness Confirmed successfully!');
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

    public function deletegembusiness(Request $request)
    {
        $rules = [
            'business_id' => 'required',
        ];
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $business = new GemBusiness();
        if($business->deleteGemBusiness($request->business_id)){
            
            return redirect()->route('manager.gembusiness')->with('managerSuccess', 'Business Deleted successfully!');
        }else{
            return redirect()->route('manager.gembusiness')->with('managerError', 'Business not found!');
        }
    }

    public function deleteleader(Request $request)
    {
        $rules = [
            'leader_id' => 'required',
        ];
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $leader = new Leader();
        if($leader->deleteLeader($request->leader_id)){
            
            return redirect()->route('manager.leaders')->with('managerSuccess', 'Team Leader Deleted successfully!');
        }else{
            return redirect()->route('manager.leaders')->with('managerError', 'Leader not found!');
        }
    }

    public function changematerialprice(Request $request)
    {
        $rules = [
            'material' => 'required',
            'price' => 'required|numeric|min:0',
        ];
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $material = new CusMaterial();
        $material->changeMaterialPrice($request->material, $request->price);
        
        return redirect()->back()->with('managerSuccess', 'Material price changed successfully!');
    }

    public function changecusgemprice(Request $request)
    {
        $rules = [
            'gem_type_id' => 'required',
            'price' => 'required|numeric|min:0',
            'gem_size_id' => 'required',
        ];
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $gem = new CusGemPrice();
        $gem->changeGemPrice($request->gem_type_id, $request->gem_size_id, $request->price);
        
        return redirect()->back()->with('managerSuccess', 'Gem price changed successfully!');
    }
    
}