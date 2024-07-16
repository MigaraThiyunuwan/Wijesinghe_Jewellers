<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CusGemSize extends Model
{
    use HasFactory;

    protected $fillable = ['size'];

    public function prices()
    {
        return $this->hasMany(CusGemPrice::class);
    }
}