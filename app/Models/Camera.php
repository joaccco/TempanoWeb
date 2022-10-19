<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Camera extends Model
{
    use HasFactory;

    protected $fillable = ['number', 'brand', 'detail'];


    public function wastes(){
        return $this->belongsTo(Waste::class);
    } 

    public function productions(){
        return $this->belongsTo(Production::class);
    }
}