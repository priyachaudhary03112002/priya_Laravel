<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('frontend.index');
});

Route::get('/index', function () {
    return view('frontend.index');
});

Route::get('/about', function () {
    return view('frontend.about');
});

Route::get('/blog-single', function () {
    return view('frontend.blog-single');
});

Route::get('/blog', function () {
    return view('frontend.blog');
});

Route::get('/cart', function () {
    return view('frontend.cart');
});

Route::get('/checkout', function () {
    return view('frontend.checkout');
});

Route::get('/contact', function () {
    return view('frontend.contact');
});

Route::get('/product-single', function () {
    return view('frontend.product-single');
});

Route::get('/shop', function () {
    return view('frontend.shop');
});

Route::get('/wishlist', function () {
    return view('frontend.wishlist');
});
Route::get('/registration', function () {
    return view('frontend.registration');
});

Route::get('/login1', function () {
    return view('frontend.login1');
});


    // Bakend routs 
Route::get('/dashboard', function () {
    return view('backend.index');
});

Route::get('/alerts_tooltips', function () {
    return view('backend.alerts_tooltips');
});

Route::get('/badges_progress', function () {
    return view('backend.badges_progress');
});

Route::get('/buttons', function () {
    return view('backend.buttons');
});

Route::get('/calendar', function () {
    return view('backend.calendar');
});

Route::get('/cards', function () {
    return view('backend.cards');
});

Route::get('/chartjs', function () {
    return view('backend.chartjs');
});

Route::get('/colors', function () {
    return view('backend.colors');
});

Route::get('/datatables', function () {
    return view('backend.datatables');
});

Route::get('/login', function () {
    return view('backend.login');
});

Route::get('/lockscreen', function () {
    return view('backend.lockscreen');
});

Route::get('/profile', function () {
    return view('backend.profile');
});

Route::get('/register', function () {
    return view('backend.register');
});

Route::get('/table_basic', function () {
    return view('backend.table_basic');
});

Route::get('/tabs', function () {
    return view('backend.tabs');
});

Route::get('/text_editors', function () {
    return view('backend.text_editors');
});

Route::get('/typography', function () {
    return view('backend.typography');
});

Route::get('/panels', function () {
    return view('backend.panels');
});

Route::get('/mail_compose', function () {
    return view('backend.mail_compose');
});

Route::get('/mail_view', function () {
    return view('backend.mail_view');
});

Route::get('/mailbox', function () {
    return view('backend.mailbox');
});

Route::get('/maps_vector', function () {
    return view('backend.maps_vector');
});