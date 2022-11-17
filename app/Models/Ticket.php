<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;
    protected $fillable = ['number', 'date', 'status', 'detail', 'product_id', 'quantity', 'mount', 'user_id'];

    public function products(){
        return $this->hasMany(Product::class, 'product_id', 'id');
    }

    public function pointsale(){
        return $this->belongsTo(PointSale::class);
    }

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
