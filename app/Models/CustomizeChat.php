<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomizeChat extends Model
{
    use HasFactory;

    protected $fillable = [
        'cus_req_id',
        'owner',
        'type',
        'message',
    ];

    public function customizerequest()
    {
        return $this->belongsTo(CustomizeRequest::class);
    }

    public function getChat($cus_req_id)
    {
        return $this->where('cus_req_id', $cus_req_id)->orderBy('created_at', 'asc')->get();
    }

    public function insertMessage($cus_req_id, $owner, $type, $message)
    {
        $this->cus_req_id = $cus_req_id;
        $this->owner = $owner;
        $this->type = $type;
        $this->message = $message;
        $this->save();
    }
}