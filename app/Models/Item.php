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
}