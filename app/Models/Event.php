<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Event extends Model
{
    use HasFactory;

    public function addEventItem(Request $request)
    {
        $event = new Event();
        $event->category = $request->category;
        $event->price = $request->price;
        $event->name = $request->name;
        $event->description = $request->description;
        $event->specification = $request->specification;
        $event->note = $request->note;

        $event->save();
        return $event;
    }

    public function getNoneDiscountEventList($category)
    {
        return self::where('category', $category)->where('discount', 'none')->get();
    }

}