<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\OrderItem;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function necklaces()
    {
        $item = new Item();
        $orderItemObj = new OrderItem();
        $itemList = $item->getItemList("Necklace");
        return view('shop.necklaces', compact('itemList','orderItemObj'));
    }

    public function rings()
    {
        $item = new Item();
        $orderItemObj = new OrderItem();
        $itemList = $item->getItemList("Ring"); //Ring
        return view('shop.rings', compact('itemList','orderItemObj'));
    }

    public function earrings()
    {
        $item = new Item();
        $orderItemObj = new OrderItem();
        $itemList = $item->getItemList("Earring"); //Earring
        return view('shop.earrings', compact('itemList','orderItemObj'));
    }

    public function bracelet()
    {
        $item = new Item();
        $orderItemObj = new OrderItem();
        $itemList = $item->getItemList('Bracelet'); //Bracelet
        return view('shop.bracelet', compact('itemList','orderItemObj'));
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
            'customize' => 'required|file|mimes:jpg,png,jpeg|max:2048',
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

        $file = $request->file('customize');
        $fileName = $id . '.' . $file->getClientOriginalExtension();
        $filePath = $file->storeAs('public/customize', $fileName);
        $item->customize = 'customize/' . $fileName;
        $item->save();
        
        if($item)
        {
            return redirect()->route('manager.profile')->with('managerSuccess', 'New Item Added successfully');
        }else{
            return redirect()->route('manager.profile')->with('managerError', 'New Item Adding Failed');
        }
        
    }
}