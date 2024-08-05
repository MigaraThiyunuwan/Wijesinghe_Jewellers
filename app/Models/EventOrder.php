<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventOrder extends Model
{
    use HasFactory;

    public function getEventOrderList($user_id)
    {
        return EventOrder::where('user_id', $user_id)->orderBy('created_at', 'desc')->get();
    }

    public function getEventOrder($id)
    {
        return EventOrder::find($id);
    }

    public function getAllOrders()
    {
        return EventOrder::all();
    }

    public function changeStatus($id, $status)
    {
        $order = EventOrder::find($id);
        $order->status = $status;
        $order->save();
    }
}