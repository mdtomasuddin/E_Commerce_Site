<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Contact;
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


    public function contact_store(Request $request)
    {
        $request->validate([
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'email' => 'required|email|unique:contacts,email',
            'contact_number' => 'required|string|max:20',
            'message' => 'required|string',
        ]);

        Contact::create([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'contact_number' => $request->contact_number,
            'message' => $request->message,
        ]);

        return redirect()->back()->with('success', 'Thanks! Your message has been sent successfully.');
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
