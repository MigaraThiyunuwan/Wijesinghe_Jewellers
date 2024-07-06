<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function necklaces()
    {
        $item = new Item();
        $itemList = $item->getItemList("Necklace");
        return view('shop.necklaces', compact('itemList'));
    }

    public function productDetails($itemId)
    {
        $item = Item::where('id',$itemId)->first();
        return view('shop.productDetails', compact('item'));
    }

    public function save (Request $request)
    {
        $rules = [
            'name' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'price' => 'required|numeric|regex:/^\d+(\.\d{1,2})?$/',
            'image' => 'required|file|mimes:jpg,png,jpeg|max:2048',
            'customize' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'specification' => 'required|string|max:255',
        ];

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        
        $tempItem = new Item();
        // call addItem function
        $item = $tempItem->addItem($request);
        $id = $item->id;

        $file = $request->file('image');
        $fileName = $id . '.' . $file->getClientOriginalExtension();
        $filePath = $file->storeAs('public/necklaces', $fileName);
        $item->image = 'necklaces/' . $fileName;
        $item->save();
        
        if($item)
        {
            return redirect()->route('manager.profile')->with('success', 'You have registered successfully');
        }else{
            return redirect()->route('manager.profile')->with('unsuccess', 'Registration Failed');
        }
        
    }
}