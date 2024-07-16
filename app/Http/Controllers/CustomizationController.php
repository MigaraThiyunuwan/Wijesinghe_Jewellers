<?php

namespace App\Http\Controllers;

use App\Models\CustomizeChat;
use App\Models\CustomizeOrder;
use App\Models\CustomizeRequest;
use App\Models\Order;
use Illuminate\Http\Request;

class CustomizationController extends Controller
{
    
    public function getmessages($cus_req_id)
    {
        $chat = new CustomizeChat();
        $messages = $chat->getChat($cus_req_id);
        //return view('messages', compact('messages'));
        return response()->json(['messages' => $messages]);
    }

    public function makerequest(Request $request)
    {

        $customize_request = new CustomizeRequest();
        $customize_order = new CustomizeOrder();
        $customize_chat = new CustomizeChat();
        
        $customize_request->user_id = $request->user_id;
        $customize_request->gender = $request->gender;
        
        
        $user_id = $request->input('user_id');
        $category = $request->input('category');
        $gender = $request->input('gender');
        $esitmation = 0;
        $gold14k_one_pavan = 100000;
        $gold18k_one_pavan = 140000;
        $gold22k_one_pavan = 170000;
        $silver_one_pavan = 2400;
        $platinum_one_pavan = 45000;

        $diamond1 = 4000;  $emerald1 = 4000;
        $diamond2 = 6000;  $emerald2 = 6000;
        $diamond3 = 8000;  $emerald3 = 8000;
        $diamond4 = 10000; $emerald4 = 10000;
        $diamond5 = 15000; $emerald5 = 15000;
        $sapphire1 = 4000;  $garnet1 = 4000;
        $sapphire2 = 6000;  $garnet2 = 6000;
        $sapphire3 = 8000;  $garnet3 = 8000;
        $sapphire4 = 10000; $garnet4 = 10000;
        $sapphire5 = 15000; $garnet5 = 15000;
        $aquamarine1 = 4000;
        $aquamarine2 = 6000;
        $aquamarine3 = 8000;
        $aquamarine4 = 10000;
        $aquamarine5 = 15000;
        $morganite1 = 4000;
        $morganite2 = 6000;
        $morganite3 = 8000;
        $morganite4 = 10000;
        $morganite5 = 15000;
               

        if($category == 'necklace')
        {
            $necklace_style = $request->input('necklace_style');
            $necklace_material = $request->input('necklace_material');
            $necklace_length = $request->input('necklace_length');
            $necklace_weight = $request->input('necklace_weight');
            
            if($necklace_material == 'Gold 14K')
            {
                $estimation = $necklace_weight * $gold14k_one_pavan;
            } elseif($necklace_material == 'Gold 18K')
            {
                $estimation = $necklace_weight * $gold18k_one_pavan;
            } elseif($necklace_material == 'Gold 22K')
            {
                $estimation = $necklace_weight * $gold22k_one_pavan;
            } elseif($necklace_material == 'Silver')
            {
                $estimation = $necklace_weight * $silver_one_pavan;
            } elseif($necklace_material == 'Platinum')
            {
                $estimation = $necklace_weight * $platinum_one_pavan;
            }

            $customize_request->style = $necklace_style;
            $customize_request->material = $necklace_material;
            $customize_request->measurement = $necklace_length;
            $customize_request->weight = $necklace_weight;
            $customize_request->gemdetails = "No Gems";
            $customize_request->estimation = $estimation;
            $customize_request->save();

            $customize_order->cus_req_id = $customize_request->id;
            $customize_order->user_id = $user_id;
            $customize_order->status = 'pending';
            $customize_order->transaction = 'pending';
            $customize_order->model = 'pending';
            $customize_order->totalBill = 0;
            $customize_order->save();

            $customize_chat->cus_req_id = $customize_request->id;
            $customize_chat->owner = 'user';
            $customize_chat->type = 'text';
            $customize_chat->message = 'Hellow!, I need to customize a necklace.';
            $customize_chat->save();

            
            $user = session()->get('user');
            if($user)
            {
                $order = new Order();
                $orderList = $order->getOrderList($user->id);
                return redirect()->route('user.profile')->with('success', 'Customize Reqest Sent successfully.')->with(compact('orderList'));
                
            }
            
        } elseif($category == 'ring')
        {
            $ring_style = $request->input('ring_style');
            $ring_material = $request->input('ring_material');
            $ring_circumference = $request->input('ring_circumference');
            $ring_weight = $request->input('ring_weight');
            $ring_gem1_type = $request->input('ring_gem1_type');
            $ring_gem1_size = $request->input('ring_gem1_size');
            $ring_gem2_type = $request->input('ring_gem2_type');
            $ring_gem2_size = $request->input('ring_gem2_size');
            $ring_gem3_type = $request->input('ring_gem3_type');
            $ring_gem3_size = $request->input('ring_gem3_size');

            // <option value="diamond">Diamond</option>
            // <option value="sapphire">Sapphire</option>
            // <option value="emerald">Emerald</option>
            // <option value="garnet">Garnet</option>
            // <option value="morganite">Morganite</option>
            // <option value="aquamarine">Aquamarine</option>

            if($ring_material == 'Gold 14K')
            {
                $estimation = $ring_weight * $gold14k_one_pavan;
                if($ring_gem1_type != 'No'){
                    if($ring_gem1_type == 'diamond')
                    {
                        if($ring_gem1_size == '1'){
                            $estimation += $diamond1;
                        } elseif($ring_gem1_size == '2'){
                            $estimation += $diamond2;
                        } elseif($ring_gem1_size == '3'){
                            $estimation += $diamond3;
                        } elseif($ring_gem1_size == '4'){
                            $estimation += $diamond4;
                        } elseif($ring_gem1_size == '5'){
                            $estimation += $diamond5;
                        }
                    }
                    elseif($ring_gem1_type == 'sapphire')
                    {
                        if($ring_gem1_size == '1'){
                            $estimation += $sapphire1;
                        } elseif($ring_gem1_size == '2'){
                            $estimation += $sapphire2;
                        } elseif($ring_gem1_size == '3'){
                            $estimation += $sapphire3;
                        } elseif($ring_gem1_size == '4'){
                            $estimation += $sapphire4;
                        } elseif($ring_gem1_size == '5'){
                            $estimation += $sapphire5;
                        }
                    }
                    
                    elseif($ring_gem1_type == 'emerald')
                    {
                        if($ring_gem1_size == '1'){
                            $estimation += $emerald1;
                        } elseif($ring_gem1_size == '2'){
                            $estimation += $emerald2;
                        } elseif($ring_gem1_size == '3'){
                            $estimation += $emerald3;
                        } elseif($ring_gem1_size == '4'){
                            $estimation += $emerald4;
                        } elseif($ring_gem1_size == '5'){
                            $estimation += $emerald5;
                        }
                    }
                    elseif($ring_gem1_type == 'garnet')
                    {
                        if($ring_gem1_size == '1'){
                            $estimation += $garnet1;
                        } elseif($ring_gem1_size == '2'){
                            $estimation += $garnet2;
                        } elseif($ring_gem1_size == '3'){
                            $estimation += $garnet3;
                        } elseif($ring_gem1_size == '4'){
                            $estimation += $garnet4;
                        } elseif($ring_gem1_size == '5'){
                            $estimation += $garnet5;
                        }
                    }
                    elseif($ring_gem1_type == 'aquamarine')
                    {
                        if($ring_gem1_size == '1'){
                            $estimation += $aquamarine1;
                        } elseif($ring_gem1_size == '2'){
                            $estimation += $aquamarine2;
                        } elseif($ring_gem1_size == '3'){
                            $estimation += $aquamarine3;
                        } elseif($ring_gem1_size == '4'){
                            $estimation += $aquamarine4;
                        } elseif($ring_gem1_size == '5'){
                            $estimation += $aquamarine5;
                        }
                    }
                    elseif($ring_gem1_type == 'morganite')
                    {
                        if($ring_gem1_size == '1'){
                            $estimation += $morganite1;
                        } elseif($ring_gem1_size == '2'){
                            $estimation += $morganite2;
                        } elseif($ring_gem1_size == '3'){
                            $estimation += $morganite3;
                        } elseif($ring_gem1_size == '4'){
                            $estimation += $morganite4;
                        } elseif($ring_gem1_size == '5'){
                            $estimation += $morganite5;
                        }
                    }
                }
            } elseif($ring_material == 'Gold 18K')
            {
                $estimation = $ring_weight * $gold18k_one_pavan;
               
            } elseif($ring_material == 'Gold 22K')
            {
                $estimation = $ring_weight * $gold22k_one_pavan;
            } elseif($ring_material == 'Silver')
            {
                $estimation = $ring_weight * $silver_one_pavan;
            } elseif($ring_material == 'Platinum')
            {
                $estimation = $ring_weight * $platinum_one_pavan;
            }
        }
    }

    public function addMessage(Request $request)
    {
        $chat = new CustomizeChat();
        $chat->insertMessage($request->cus_req_id, $request->owner,'text',$request->message);
        return 'Message submitted successfully!';
    }

    public function addImage(Request $request)
    {
        $chat = new CustomizeChat();

        $randomNumber1 = rand(11111, 99999);
        $randomNumber2 = rand(11111, 99999);

        $file = $request->file('image');
        $fileName = $request->cus_req_id . $randomNumber1 . $randomNumber2 . '.' . $file->getClientOriginalExtension();
        $file->storeAs('public/chats', $fileName);
        $dbfilename = 'chats/' . $fileName;
        
        $chat->insertMessage($request->cus_req_id, $request->owner,'image',$dbfilename);
        return 'Image submitted successfully!';
    }

    public function changeOrderStatus(Request $request)
    {
        $order = new CustomizeOrder();
        $totalBill = 0;
        if($request->status == 'accept')
        {
            $totalBill = $request->totalBill;
            $order->changeOrderStatus($request->cus_req_id, $request->status, $totalBill);
            return redirect()->back()->with('leaderSuccess', 'Order status changed successfully!');
        }else{
            $order->changeOrderStatus($request->cus_req_id, $request->status, $totalBill);
            return redirect()->back()->with('leaderSuccess', 'Order status changed successfully!');
        }
        
    }
}