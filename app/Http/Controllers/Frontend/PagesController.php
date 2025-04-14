<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use DrewM\MailChimp\MailChimp;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

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

        try {
            Contact::create([
                'firstname' => $request->firstname,
                'lastname' => $request->lastname,
                'email' => $request->email,
                'contact_number' => $request->contact_number,
                'message' => $request->message,
            ]);

            //Send email to Mailchimp audience list
            $mailchimp = new MailChimp(env('MAILCHIMP_API_KEY'));
            $list_id = env('MAILCHIMP_LIST_ID');

            $response = $mailchimp->post("lists/$list_id/members", [
                'email_address' => $request->email,
                'status'        => 'subscribed',
                'merge_fields'  => [
                    'FNAME' => $request->firstname ?? "",
                    'LNAME' => $request->lastname ?? "",
                    'PHONE' => $request->contact_number ?? "",

                ],
            ]);

            //conditonal check for success/failure
            if ($mailchimp->success()) {
                return redirect()->back()->with('success', 'Thanks! Your message has been sent successfully!');
            } else {
                Log::error('Mailchimp API Error: ' . $mailchimp->getLastError());
                return redirect()->back()->with('warning', 'Thanks! Your message has been sent successfully!');
            }
        } catch (Exception $e) {
            Log::error('Contact Store Error: ' . $e->getMessage());
        }
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
