<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(){
        $products = Product::all();
        return view('productos.index', compact('products'));
    }

    public function show(Product $product){
        return view('productos.show', compact('product'));
    }
}
