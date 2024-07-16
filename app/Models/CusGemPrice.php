<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CusGemPrice extends Model
{
    use HasFactory;

    protected $fillable = ['gem_type_id', 'gem_size_id', 'price'];

    public function gemType()
    {
        return $this->belongsTo(CusGemType::class);
    }

    public function gemSize()
    {
        return $this->belongsTo(CusGemSize::class);
    }
}