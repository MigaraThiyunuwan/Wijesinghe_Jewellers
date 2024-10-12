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

    public function getEvent($id)
    {
        return self::find($id);
    }

    public function getEventList($category)
    {
        return self::where('category', $category)->get();
    }

    public function getCategoryCount($category)
    {
        return self::where('category', $category)->count();
    }

    public function changePrice($id, $newPrice)
    {
        $event = self::find($id);
        if($event)
        {
            $event->price = $newPrice;
            $event->save();
            return true;
        }
        else
        {
            return false;
        }
        
    }

    public function changePercentage($id, $newPercentage)
    {
        $event = self::find($id);
        if($event)
        {
            $event->discountPrice = $newPercentage;
            $event->save();
            return true;
        }
        else
        {
            return false;
        }
    }
}