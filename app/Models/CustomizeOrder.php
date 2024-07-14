<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomizeOrder extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'cus_req_id',
        'status',
        'transaction',
        'model',
        'totalBill',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function customizerequest()
    {
        return $this->belongsTo(CustomizeRequest::class);
    }

    public function getCustomizeOrderList($user_id)
    {
        return $this->where('user_id', $user_id)->orderBy('created_at', 'desc')->get();
    }
}