<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'code', 'price', 'detail'];

    public function production(){
        return $this->belongsTo(Production::class);
    }

    public function wastes(){
        return $this->belongsTo(Waste::class);
    }

    public function tickets(){
        return $this->belongsToMany(Ticket::class);
    }
}
