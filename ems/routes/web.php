<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\employeeController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\blogController;

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

Route::get('/index', function () {
    return view('backend.index');
});

Route::get('/add_employee', function () {
    return view('backend.add_employee');
});

Route::get('/register', function () {
    return view('backend.register');
});

Route::get('/login', function () {
    return view('backend.login');
});

// Route::get('/manage_employee', function () {
//     return view('backend.manage_employee');
// });

Route::get('/blog', function () {
    return view('Frontend.blog');
});


Route::post('/add_employee',[employeeController::class,'add_employee']);
Route::get('/manage_employee',[employeeController::class,'manage_employee']);

Route::get('/edit_employee/{id}',[employeeController::class,'edit_employee']);
Route::post('/edit_employee/{id}',[employeeController::class,'update']);
Route::get('/delete_employee/{id}',[employeeController::class,'destroy']);

Route::post('/register',[adminController::class,'register']);
Route::post('/login',[adminController::class,'login']);
Route::get('/logout',[adminController::class,'logout']);

Route::post('/blog',[blogController::class,'blog_add']);
Route::get('/show',[blogController::class,'show_data']);