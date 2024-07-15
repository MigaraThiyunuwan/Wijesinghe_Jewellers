<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomizeRequest extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'style',
        'material',
        'gender',
        'weight',
        'measurement',
        'gemdetails',
        'estimation',
        
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function customizeOrders()
    {
        return $this->hasMany(CustomizeOrder::class, 'cus_req_id');
    }

    public function getAllRequest()
    {
        return $this->whereHas('customizeorders', function ($query) {
            $query->where('status', 'pending');
        })->orderBy('created_at', 'desc')->get();
     
    }

    public function customizechat()
    {
        return $this->hasMany(CustomizeChat::class);
    }

    public function getRequests($user_id)
    {
        return $this->where('user_id', $user_id)->orderBy('created_at', 'desc')->get();
    }
    
    public function getCustomReq($id)
    {
        return $this->where('id', $id)->first();
    }
}