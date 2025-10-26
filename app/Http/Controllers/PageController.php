<?php

namespace App\Http\Controllers;

use App\Models\Product;

class PageController extends Controller
{
    public function home()
    {
        return view('pages.index');
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

    public function president()
    {
        return view('pages.president');
    }

    public function galleryImages()
    {
        return view('pages.gallery-images');
    }

    public function history()
    {
        return view('pages.history');
    }

    public function je_tc()
    {
        return view('pages.je-tc');
    }

    public function ladiesClub()
    {
        return view('pages.ladies-club');
    }

    public function magazine()
    {
        return view('pages.magazine');
    }

    public function news()
    {
        return view('pages.news');
    }

}
