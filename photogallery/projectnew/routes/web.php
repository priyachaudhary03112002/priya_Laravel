<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\photoController;

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

Route::get('/dashboard', function () {
    return view('backend.index');
});

Route::get('/add_gallery', function () {
    return view('backend.add_gallery');
});

Route::get('/manage_gallery', function () {
    return view('backend.manage_gallery');
});

Route::post('/add_gallery',[photoController::class,'add_gallery']);



Route::get('/index', function () {
    return view('frontend.index');
});