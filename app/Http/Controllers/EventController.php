<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function home()
    
    {
        return view('Events.home');
    }

    public function wediing()
    {
        $event = new Event();
        $eventList = $event->getNoneDiscountEventList('Wedding');
        return view('Events.wedding', compact('eventList'));
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
}