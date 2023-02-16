<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\studentController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('allstudent',[studentController::class,"allstudent"]);
Route::get('single_student/{id}',[studentController::class,"single_student"]);
Route::post('add_student',[studentController::class,"store"]);
Route::post('login',[studentController::class,"student_login"]);
Route::get('search/{key}',[studentController::class,'search']);
Route::put('update_student/{id}',[studentController::class,'update']);
Route::delete('delete_student/{id}',[studentController::class,'destroy']);
Route::get('profile',[studentController::class,"profile"]);