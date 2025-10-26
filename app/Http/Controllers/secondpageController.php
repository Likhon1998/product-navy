<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class secondpageController extends Controller
{


    // Method for organisation page
    public function organisation()
    {
        return view('secondpages.organisation');
    }

    // Method for organization page
    public function organization()
    {
        return view('secondpages.organization');
    }

    // Method for president page
    public function president()
    {
        return view('secondpages.president');
    }

    // Method for product-form page
    public function productForm()
    {
        return view('secondpages.product-form');
    }

    // Method for products page
    public function products()
    {
        return view('secondpages.products');
    }

    // Method for publications page
    public function publications()
    {
        return view('secondpages.publications');
    }

    // Method for role-of-bnfwa page
    public function roleOfBnfwa()
    {
        return view('secondpages.role-of-bnfwa');
    }

    // Method for sendEmail page
    public function sendEmail()
    {
        return view('secondpages.sendEmail');
    }

    // Method for shishu-niketon page
    public function shishuNiketon()
    {
        return view('secondpages.shishu-niketon');
    }

    // Method for vision-mission page
    public function visionMission()
    {
        return view('secondpages.vision-mission');
    }

}
