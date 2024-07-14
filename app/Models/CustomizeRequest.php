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

    public function customizeorders()
    {
        return $this->hasMany(CustomizeOrder::class);
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