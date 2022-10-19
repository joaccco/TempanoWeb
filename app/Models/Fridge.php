<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fridge extends Model
{
    use HasFactory;

    protected $fillable = ['number', 'brand', 'capability'];

    public function pointsales(){
        return $this->belongsTo(PointSale::class);
    }
}
