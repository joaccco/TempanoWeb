<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;
    protected $fillable = ['number', 'date', 'mount', 'status', 'detail', 'product_id', 'user_id'];

    public function products(){
        return $this->belongsToMany(Product::class);
    }

    public function pointsale(){
        return $this->belongsTo(PointSale::class);
    }

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
