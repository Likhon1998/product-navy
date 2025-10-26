<?php

namespace App\Http\Controllers;

use App\Models\Product;

class PageController extends Controller
{
    public function home()
    {
        $products = Product::latest()->get();
        return view('welcome', compact('products'));
    }
}
