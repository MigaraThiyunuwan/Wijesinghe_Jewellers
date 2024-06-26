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
        return $this->where('user_id', $user_id)->get();
    }
}