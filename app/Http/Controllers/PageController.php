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

     public function asharAlo()
    {
        return view('pages.ashar-alo');
    }

    public function chiefMessage()
    {
        return view('pages.chief-message');
    }
}
