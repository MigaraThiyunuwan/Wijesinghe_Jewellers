<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CusMaterial extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'price'];

    public static function getMaterialList()
    {
        return self::all();
    }

    public function changeMaterialPrice($name, $price)
    {
        $material = $this->where('name', $name)->first();
        $material->price = $price;
        $material->save();
    }

    public function getMaterial($id)
    {
        return $this->where('id', $id)->first();
    }
}