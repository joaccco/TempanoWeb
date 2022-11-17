<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PointSale extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'lat', 'lng', 'schedule', 'motto', 'detail', 'fridge_id', 'user_id'];
    public function fridges(){
        return $this->belongsTo(Fridge::class);
    }

    public function users(){
        return $this->belongsTo(User::class);
    }

    public function tickets(){
        return $this->hasMany(Ticket::class);
    }
}