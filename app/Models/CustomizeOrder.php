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

   
    public function customizeRequest()
    {
        return $this->belongsTo(CustomizeRequest::class, 'cus_req_id');
    }

    public function getCustomizeOrderList($user_id)
    {
        return $this->where('user_id', $user_id)->orderBy('created_at', 'desc')->get();
    }

    public function getAcceptedOrderList()
    {
        return $this->where('status', '!=', 'reject')->where('status', '!=', 'pending')->orderBy('created_at', 'desc')->get();
    }

    public function changeOrderStatus($cus_req_id, $status, $totalBill)
    {
        $order = $this->where('cus_req_id', $cus_req_id)->first();

        if($status == 'accept' || $status == 'reject'){
            $order->status = $status;
            $order->totalBill = $totalBill;
            $order->save();
        }else{
            $order->status = $status;
            $order->save();
        }
    }
    
    public function getOrderDetail($cus_req_id)
    {
        return $this->where('cus_req_id', $cus_req_id)->first();
    }
}