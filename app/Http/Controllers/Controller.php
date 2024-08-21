<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\GemBusiness;
use App\Models\Item;
use App\Models\Leader;
use App\Models\Manager;
use App\Models\OrderItem;
use App\Models\User;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Session;
use Symfony\Component\Process\Process;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __construct()
    {
        $this->middleware('web');
    }
    
    public function home(){
        $item = new Item();
        $orderItemObj = new OrderItem();
        $itemList = $item->getNewArrivals(); 
        return view('home', compact('itemList','orderItemObj'));
   
    }

    public function contactus()
    {
        return view('contactus');
    }

    public function generateHash(Request $request)
    {
        $merchant_id = "1224349";
        $merchant_secret = "Mjc3NDU1OTUxNjE1NTUzNTQ0NTY0NTM5OTQ5MzUzNjQ3NzkzNzk=";
        $order_id = $request->input('order_id');
        $amount = $request->input('amount');
        $currency = 'LKR';

        
        
    
        $formatted_amount = number_format($amount, 2, '.', '');
        

        $hash = strtoupper(
            md5(
                $merchant_id . 
                $order_id . 
                $formatted_amount . 
                $currency .  
                strtoupper(md5($merchant_secret)) 
            )
        );
        
        //Log::info('Hash: ' . $hash);
        return response()->json([
            'order_id' => $order_id,
            'amount' => $amount,
            'hash' => $hash
        ]);
    }
    public function paymentReturn()
    {
        return view('payment.return'); // Create a view for this
    }

    public function paymentCancel()
    {
        return view('payment.cancel'); // Create a view for this
    }

    public function paymentNotify(Request $request)
{
    Log::info('inside payment  notify');
    $merchant_id = $request->input('merchant_id');
    $order_id = $request->input('order_id');
    $payhere_amount = $request->input('payhere_amount');
    $payhere_currency = $request->input('payhere_currency');
    $status_code = $request->input('status_code');
    $md5sig = $request->input('md5sig');

    $merchant_secret = "Mjc3NDU1OTUxNjE1NTUzNTQ0NTY0NTM5OTQ5MzUzNjQ3NzkzNzk=";

    $local_md5sig = strtoupper(
        md5(
            $merchant_id . 
            $order_id . 
            $payhere_amount . 
            $payhere_currency . 
            $status_code . 
            strtoupper(md5($merchant_secret)) 
        )
    );

    if (($local_md5sig === $md5sig) && ($status_code == 2)) {
        // Update your database as payment success
        // Order::find($order_id)->update(['status' => 'paid']);
        Log::info('payment success');
    }

    return response()->json(['status' => 'ok']);
}
    
    // Controller method to delete sessions when any user logout
    public function logout(Request $request)
    {
        //Session::flush();
        //$request = new Request();
        $request->session()->forget('user');
        $request->session()->forget('manager');
        $request->session()->forget('leader');
        $request->session()->forget('gemBusiness');
        session()->forget('orders');
        return redirect()->route('home');
    }

    public function aboutus(){
        return view('aboutus');
    }

    public function userlogin()
    {
        return view('userlogin');
    }

    public function loginallusers(Request $request)
    {
        $rules = [
            'email' => 'required|string|email|max:255',
            'password' => 'required|string',
            'role' => 'required',
        ];

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        if($request->role == 'user')
        {
            //Call login function in user model
            $user = new User();
            $loggedInUser = $user->login($request->email, $request->password);

            if ($loggedInUser) {
                Session::flush();
                $cart = new Cart();
                $cartDetails = $cart->getCart($loggedInUser->id);
                session(['orders' => $cartDetails]);
                $request->session()->put('user', $loggedInUser);
                return redirect()->route('user.profile');
            }

            return redirect()->back()->withErrors(['email' => 'Invalid credentials'])->withInput();
            
        }else if($request->role == 'manager')
        {
            //Call login function in manager model
            $manager = new Manager();
            $loggedInManager = $manager->login($request->email, $request->password);

            if ($loggedInManager) {
                
                Session::flush();
                $request->session()->put('manager', $loggedInManager);
                return redirect()->route('manager.profile');
            }

            return redirect()->back()->withErrors(['email' => 'Invalid credentials'])->withInput();
            
        }else if($request->role == 'gembusiness')
        {
            //Call login function in GemBusiness model
            $gemBusiness = new GemBusiness();
            $logedGemBusiness = $gemBusiness->login($request->email, $request->password);
            
            if ($logedGemBusiness) {
                Session::flush();
                $request->session()->put('gemBusiness', $logedGemBusiness);
                return redirect()->route('gem.profile');
            }

            return redirect()->back()->withErrors(['email' => 'Invalid credentials'])->withInput();
            
        }else if($request->role == 'leader')
        {
            //Call login function in Leader model
            $leader = new Leader();
            $loggedInLeader = $leader->login($request->email, $request->password);

            if ($loggedInLeader) {
                Session::flush();
                $request->session()->put('leader', $loggedInLeader);
                return redirect()->route('leader.profile');
            }

            return redirect()->back()->withErrors(['email' => 'Invalid credentials'])->withInput();
        }

        
    }

}