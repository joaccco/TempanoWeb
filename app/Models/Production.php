<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Production extends Model
{
    use HasFactory;
    protected $fillable = ['date', 'detail', 'product_id', 'quantity', 'camera_id'];

    public function products(){
        return $this->hasMany(Product::class);
    }

    public function cameras(){
        return $this->belongsTo(Camera::class);
    }

}
