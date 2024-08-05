<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CusGemType extends Model
{
    use HasFactory;
    protected $fillable = ['name'];

    public function prices()
    {
        return $this->hasMany(CusGemPrice::class);
    }

    public static function getGemList()
    {
        return self::all();
    }

    public function getGemType($id)
    {
        return $this->where('id', $id)->first();
    }

    
}