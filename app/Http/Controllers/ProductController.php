<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product; // Add this line to import the Product model

class ProductController extends Controller
{
    public function index()
{
    $products = Product::all();

    return view('products.index', compact('products'));
}

    public function show(Product $product)
    {
        return view('products.show', compact('product'));
    }
}