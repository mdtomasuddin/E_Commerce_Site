<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    
    public function about_us()
    {
        return view('front.pages.about-us');
    }


    public function contact_us()
    {
        return view('front.pages.contact-us');
    }


    public function faq()
    {
        return view('front.pages.faq');
    }


    public function terms_conditions()
    {
        return view('front.pages.terms-conditions');
    }

    public function privacy_policy()
    {
        return view('front.pages.privacy-policy');
    }

    
}
