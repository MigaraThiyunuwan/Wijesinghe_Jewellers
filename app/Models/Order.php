<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'totalPrice',
        'deliveryAddress',
        'country',
        'receiverName',
        'contact_no',
        'transaction',
        'orderStatus',
        'deliveryStatus',
        'placed_at',
        'processed_at',
        'shipped_at',
        'out_at',
        'delivered_at',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function items()
    {
        return $this->hasMany(OrderItem::class);
    }

    public function getOrderList($user_id)
    {
        return $this->where('user_id', $user_id)->orderBy('created_at', 'desc')->get();
    }

    public function getOrder($id)
    {
        return $this->find($id);
    }
    
    public static function getAllOrders()
    {
        return self::all();
    }

    public function getAcceptedOrders()
    {
        return $this->where('orderStatus', 'accept')->get();
    }

    public function changeOrderStatus($order_id, $status)
    {
        $order = $this->find($order_id);
        $order->orderStatus = $status;
        $order->save();
        return true;
    }

    public function changeOrderProcess($order_id, $columnName)
    {
        $order = $this->find($order_id);
        $order->$columnName = now();
        $order->save();
        return true;
    }

    public static function getPendingOrderCount()
    {
        return self::where('orderStatus', 'pending')->count();
    }

    public static function getorderstobedeliveredCount()
    {
        return self::where('delivered_at', null)->count();
    }
    public static function getDeliveredOrderCount()
    {
        return self::where('delivered_at', '!=', null)->count();
    }

    public static function getTotalIncome()
    {
        return self::where('delivered_at', '!=', null)->sum('totalPrice');
    }
}