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
// Route::get('/products/{id}', [ProductController::class, 'show'])->name('products.show');
// Route::post('/products', [ProductController::class, 'store'])->name('products.store');
// Route::put('/products/{id}', [ProductController::class, 'update'])->name('products.update');
// Route::delete('/products/{id}', [ProductController::class, 'destroy'])->name('products.destroy');

// Compare Routes
Route::get('/compare', [CompareController::class, 'index'])->name('compare.index');
// Route::post('/compare/add', [CompareController::class, 'add'])->name('compare.add');
// Route::delete('/compare/clear', [CompareController::class, 'clear'])->name('compare.clear');

// Cart Routes
Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
// Route::post('/cart/add', [CartController::class, 'add'])->name('cart.add');
// Route::delete('/cart/remove/{id}', [CartController::class, 'remove'])->name('cart.remove');
// Route::delete('/cart/clear', [CartController::class, 'clear'])->name('cart.clear');

// Wishlist Routes
Route::get('/wishlist', [WishlistController::class, 'index'])->name('wishlist.index');
// Route::post('/wishlist/add', [WishlistController::class, 'add'])->name('wishlist.add');
// Route::delete('/wishlist/remove/{id}', [WishlistController::class, 'remove'])->name('wishlist.remove');


// Checkout Routes
Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout.index');
// Route::post('/checkout/process', [CheckoutController::class, 'process'])->name('checkout.process');

//  Subscribe Routes
// Route::post('/subscribe', [SubscribeController::class, 'store'])->name('subscribe.store');
// Route::delete('/subscribe/{id}', [SubscribeController::class, 'destroy'])->name('subscribe.destroy');
