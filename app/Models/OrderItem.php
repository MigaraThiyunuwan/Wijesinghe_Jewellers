<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    use HasFactory;
    protected $fillable = [
        'order_id',
        'item_id',
        'itemQuantity',
    
    ];
    
    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    public function item()
    {
        return $this->belongsTo(Item::class);
    }

    public static function getOrderItems($order_id)
    {
        return self::where('order_id', $order_id)->get();
    }

    public function getSoldCount($item_id)
    {
        return self::where('item_id', $item_id)->sum('itemQuantity');
    }
}