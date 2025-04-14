<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Silder;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{

    public function index()
    {

        $sliders = Silder::where('status', 1)->get();
        $testmonials = Testimonial::where('status', 1)->get();
        return view('welcome',[
                'sliders' => $sliders,
                'testmonials' => $testmonials,
            ]
        );
    }
}
