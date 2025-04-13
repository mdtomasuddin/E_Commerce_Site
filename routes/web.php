<?php

use App\Http\Controllers\Frontend\CartController;
use App\Http\Controllers\Frontend\CheckoutController;
use App\Http\Controllers\Frontend\CompareController;
use App\Http\Controllers\Frontend\PagesController;
use App\Http\Controllers\Frontend\ProductController;
use App\Http\Controllers\Frontend\SubscribeController;
use App\Http\Controllers\Frontend\WelcomeController;
use App\Http\Controllers\Frontend\WishlistController;
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


//Product Routes
Route::get('/products', [ProductController::class, 'index'])->name('products.index');

// Compare Routes
Route::get('/compare', [CompareController::class, 'index'])->name('compare.index');

// Cart Routes
Route::get('/cart', [CartController::class, 'index'])->name('cart.index');

// Wishlist Routes
Route::get('/wishlist', [WishlistController::class, 'index'])->name('wishlist.index');


// Checkout Routes
Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout.index');

//  Subscribe Routes
// Route::post('/subscribe', [SubscribeController::class, 'store'])->name('subscribe.store');
