<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Item extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'category',
        'price',
        'quantity',
        'image',
        'customize',
        'description',
        'specification',
    ];

    public function carts()
    {
        return $this->hasMany(Cart::class);
    }

    public function items()
    {
        return $this->hasMany(OrderItem::class);
    }

    public function addItem(Request $request)
    {
        $item = new Item();
        $item->name = $request->name;
        $item->category = $request->category;
        $item->price = $request->price;
        $item->image = $request->image;
        $item->customize = $request->customize;
        $item->description = $request->description;
        $item->specification = $request->specification;

        $item->save();
        return $item;
    }

    public function getItemList($type)
    {
        if ($type = "all") {
            return self::all();
        } else {
            return self::where('category', $type)->get();
        }
    }

    public function getItemDetails($id)
    {
        return self::where('id', $id)->first();
    }

    public function getNumberOfItemsPerCategory($category)
    {
        return self::where('category', $category)->count();
    }

    public function getListOfCategory($category)
    {
        return self::where('category', $category)->get();
    }

    public function changequantity($id, $newquantity)
    {
        $item = self::find($id);
        if ($item) {
            $item->quantity = $newquantity;
            $item->save();
            return true;
        } else {
            return false;
        }
    }

    public function getItemQuantity($id)
    {
        $item = self::find($id);
        if ($item) {
            return $item->quantity;
        } else {
            return false;
        }
    }

    public function deleteItem($item_id)
    {
        $item = self::find($item_id);
        if ($item) {
            $item->delete();
            return true;
        } else {
            return false;
        }
    }
}