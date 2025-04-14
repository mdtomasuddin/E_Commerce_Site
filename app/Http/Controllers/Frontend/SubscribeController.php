<?php

namespace App\Http\Controllers\Frontend;

use DrewM\MailChimp\MailChimp;
use App\Http\Controllers\Controller;
use App\Models\Subscribe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class SubscribeController extends Controller
{
    // public function store(Request $request){
    //         $request->validate([
    //             'email' => 'required|email|unique:subscribes,email',
    //         ]);

    //         Subscribe::create([
    //             'email' => $request->email,
    //         ]);

    //         return redirect()->back()->with('success', 'Subscribed successfully!');
    // }



    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:subscribes,email',
        ]);

        try {

            Subscribe::create([
                'email' => $request->email,
            ]);

            //Send to Mailchimp
            $mailchimp = new MailChimp(env('MAILCHIMP_API_KEY'));
            $list_id = env('MAILCHIMP_LIST_ID');

            $response = $mailchimp->post("lists/$list_id/members", [
                'email_address' => $request->email,
                'status'        => 'subscribed',
            ]);
            //Check success
            if ($mailchimp->success()) {
                return redirect()->back()->with('success', 'You Have Subscribed successfully !');
            } else {
                Log::error('Mailchimp API Error: ' . $mailchimp->getLastError());
                return redirect()->back()->with('warning', 'You Have Subscribed successfully !');
            }


        } catch (\Exception $e) {
            log::error('Subscription Error: ' . $e->getMessage());
        }
    }
}
