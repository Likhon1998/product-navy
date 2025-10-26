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

    public function contact()
    {
        return view('pages.contact');
    }

    public function dayCareCentre()
    {
        return view('pages.day-care-centre');
    }

    public function events()
    {
        return view('pages.events');
    }

    public function formerPresident()
    {
        return view('pages.former-president');
    }

    public function gallery()   
    {
        return view('pages.gallery');
    }

}
