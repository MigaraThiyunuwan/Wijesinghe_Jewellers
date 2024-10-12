<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\EventOrder;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function home()
    
    {
        return view('Events.home');
    }

    public function wedding()
    {
        $event = new Event();
        $eventList = $event->getNoneDiscountEventList('Wedding');
        return view('Events.wedding', compact('eventList'));
    }

    public function panchayudha()
    {
        $event = new Event();
        $eventList = $event->getNoneDiscountEventList('Panchayudha');
        return view('Events.panchayudha', compact('eventList'));
    }

    public function apala()
    {
        $event = new Event();
        $eventList = $event->getNoneDiscountEventList('Apala');
        return view('Events.apala', compact('eventList'));
    }

    public function receiverdetails(Request $request)
    {
        $eventOrder = new EventOrder();
        $eventOrder->event_id = $request->input('event_id');
        $eventOrder->price = $request->input('price');
        $eventOrder->user_id = $request->input('user_id');
        $request->session()->put('eventOrder', $eventOrder);
        return view('Events.receiverDetailsForm', compact('eventOrder'));
    }

    public function receiverdetailsSave(Request $request)
    {
        $eventOrder = $request->session()->get('eventOrder');
        $eventOrder->receiverName = $request->input('receiverName');
        $eventOrder->contact_no = $request->input('contact_no');
        $eventOrder->deliveryAddress = $request->input('deliveryAddress');
        $eventOrder->save();
        return view('Events.paymentConfirm', compact('eventOrder'));
   
    }

    public function retrypayment(Request $request)
    {
        $order_id = $request->order_id;
        $eventOrder = new EventOrder();
        $eventOrder = $eventOrder->getEventOrder($order_id);
        $request->session()->put('eventOrder', $eventOrder);
        return view('Events.paymentConfirm', compact('eventOrder'));
    }
    
    public function save (Request $request)
    {
        $rules = [
            'name' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'price' => 'required|numeric|regex:/^\d+(\.\d{1,2})?$/',
            'image' => 'required|file|mimes:jpg,png,jpeg|max:2048',
            'description' => 'required|string|max:255',
            'specification' => 'required|string|max:255',
            'note' => 'required|string|max:255',
        ];

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
    
        $tempEvent = new Event();
        // call addItem function
        $event = $tempEvent->addEventItem($request);
        $id = $event->id;

        $file = $request->file('image');
        $fileName = $id . '.' . $file->getClientOriginalExtension();
        $filePath = $file->storeAs('public/events', $fileName);
        $event->image = 'events/' . $fileName;
        $event->save();
        
        if($event)
        {
            return redirect()->route('manager.profile')->with('managerSuccess', 'New Item Added successfully');
        }else{
            return redirect()->route('manager.profile')->with('managerError', 'New Item Adding Failed');
        }
        
    }

    public function changestatus(Request $request)
    {
        $order_id = $request->order_id;
        $status = $request->status;
        $eventOrder = new EventOrder();
        $eventOrder->changeStatus($order_id, $status);
        return redirect()->route('manager.profile')->with('managerSuccess', 'Order Accepted Successfully');
    }
}