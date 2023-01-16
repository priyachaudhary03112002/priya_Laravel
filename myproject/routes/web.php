<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\customerController;

use App\Http\Controllers\categoryController;
use App\Http\Controllers\productController;
use App\Http\Controllers\adminController;

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

Route::get('/shop',[productController::class,'viewall']);

Route::get('/skin', function () {
    return view('frontend.skin');
});

Route::get('/makeup', function () {
    return view('frontend.makeup');
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

Route::get('/view_customer_report',[customerController::class,'show']);
 
Route::post('/registration',[customerController::class,'register']);

Route::post('/login1',[customerController::class,'login']);
Route::get('/logout',[customerController::class,'logout']);

 // Bakend routs 

 Route::get('/profile',[adminController::class,'show']);
 Route::get('/editprofile/{id}',[adminController::class,'edit']);
 Route::post('/editprofile/{id}',[adminController::class,'update']);

 Route::post('/register',[adminController::class,'store']);

Route::post('/login',[adminController::class,'login']);
Route::get('/logout',[adminController::class,'logout']);

 Route::post('/add_category',[categoryController::class,'add_category']);
 Route::get('/manage_category',[categoryController::class,'manage_category']);
 Route::get('/editcategory/{id}',[categoryController::class,'edit']);
 Route::post('/editcategory/{id}',[categoryController::class,'update']);
 Route::get('/deletecategory/{id}',[categoryController::class,'destroy']);   

 
 Route::get('/add_product',[productController::class,'index']);
 Route::post('/add_product',[productController::class,'add_product']);
 Route::get('/manage_product',[productController::class,'manage_product']);
 Route::post('/manage_product',[productController::class,'manage_product']);
 
 Route::get('/editproduct/{id}',[productController::class,'edit']);
 Route::post('/editproduct/{id}',[productController::class,'update']);
 Route::get('/deleteproduct/{id}',[productController::class,'destroy']);
 Route::get('/product_status/{id}',[productController::class,'product_status']);
 
//Route::post('/manage_product',[productController::class,'search']);


Route::get('/dashboard', function () {
    return view('backend.dashboard');
});

Route::get('/add_category', function () {
    return view('backend.add_category');
});

// Route::get('/manage_category', function () {
//     return view('backend.manage_category');
// });

// Route::get('/add_product', function () {
//     return view('backend.add_product');
// });

// Route::get('/manage_product', function () {
//     return view('backend.manage_product');
// });

Route::get('/view_contact_report', function () {
    return view('backend.view_contact_report');
});

// Route::get('/view_customer_report', function () {
//     return view('backend.view_customer_report');
// });

Route::get('/calendar', function () {
    return view('backend.calendar');
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

Route::get('/mail_compose', function () {
    return view('backend.mail_compose');
});

Route::get('/mail_view', function () {
    return view('backend.mail_view');
});

Route::get('/mailbox', function () {
    return view('backend.mailbox');
});


