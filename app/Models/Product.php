<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'code', 'price', 'detail', 'stock', 'alert'];

    public function details(){
        return $this->hasMany(Detail::class);
    } 

    public function productions(){
        return $this->BelongsToMany(Production::class);
    }

    public function wastes(){
        return $this->BelongsToMany(Waste::class);
    }
}
