<?php

namespace App\Http\Controllers;

use App\Models\Students;
use Illuminate\Http\Request;

class ProductController
{
   public function index()
{
    $products = Students::all();

    return view('products', compact('products'))
        ->with('title', 'Product List');
}
}
