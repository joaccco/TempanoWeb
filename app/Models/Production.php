<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Production extends Model
{
    use HasFactory;

    public function products(){
        return $this->belongsTo(Product::class);
    }

    public function cameras(){
        return $this->belongsTo(Camera::class);
    }

}
