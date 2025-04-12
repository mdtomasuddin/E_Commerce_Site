<?php

use App\Http\Controllers\Frontend\PagesController;
use App\Http\Controllers\Frontend\WelcomeController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [WelcomeController::class, 'index'])->name('frontend.home.page');

Route::get('/about-us', [PagesController::class, 'about_us'])->name('about.us');
Route::get('/contact-us', [PagesController::class, 'contact_us'])->name('contact.us');
Route::get('/faq', [PagesController::class, 'faq'])->name('faq');
Route::get('/terms-conditions', [PagesController::class, 'terms_conditions'])->name('terms.conditions');
Route::get('/privacy-policy', [PagesController::class, 'privacy_policy'])->name('privacy.policy');
