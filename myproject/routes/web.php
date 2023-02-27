<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\blogController;
use App\Http\Controllers\customerController;
use App\Http\Controllers\cartController;
use App\Http\Controllers\categoryController;
use App\Http\Controllers\productController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\contactController;
use App\Http\Controllers\wishlistController;

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

// Route::get('/cart', function () {
//     return view('frontend.cart');
// });

Route::get('/checkout', function () {
    return view('frontend.checkout');
});

Route::get('/product-single', function () {
    return view('frontend.product-single');
});

Route::get('/skin', function () {
    return view('frontend.skin');
});

Route::get('/makeup', function () {
    return view('frontend.makeup');
});

Route::get('/wishlist', function () {
    return view('frontend.wishlist');
});
// Route::get('/registration', function () {
//     return view('frontend.registration');
// });

// Route::get('/login1', function () {
//     return view('frontend.login1');
// });

Route::get('/profile1', function () {
    return view('frontend.profile1');
});

Route::get('/blog',[blogController::class,'viewall']);
Route::get('/blog-single/{id}',[blogController::class,'singleblog_edit']);

Route::get('/shop',[productController::class,'viewall']);
Route::get('/index',[productController::class,'random_product']);
Route::get('/',[productController::class,'random_product']);

Route::get('/view_customer_report',[customerController::class,'show']);

Route::group(['middleware'=>['beforelogin']],function(){
Route::post('/registration',[customerController::class,'register']);
Route::get('/registration',[customerController::class,'registrationpage']);
Route::post('/login1',[customerController::class,'login']);
Route::get('/login1',[customerController::class,'loginpage']);
});

Route::group(['middleware'=>['afterlogin']],function(){
Route::get('/profile1',[customerController::class,'profile_show']);
Route::get('/editprofile1/{id}',[customerController::class,'edit']);
Route::post('/editprofile1/{id}',[customerController::class,'update']);
Route::get('/logout1',[customerController::class,'logout']);
});

Route::get('/contact', function () {
    return view('frontend.contact');
});
Route::post('/postcontact',[contactController::class,'contact']);
Route::get('/view_contact_report',[contactController::class,'show']);

Route::post('/single_product/{id}',[cartController::class,'add_cart']);
Route::get('/cart',[cartController::class,'manage_cart']);
Route::get('/deleteiteams/{id}',[cartController::class,'delete_cart']);
Route::get('/view_cart_report',[cartController::class,'show']);
Route::post('/shop/{id}',[cartController::class,'add_cart']);

Route::post('/index/{id}',[wishlistController::class,'add_wishlist']);
Route::post('/shop/{id}',[wishlistController::class,'add_wishlist']);
Route::get('/wishlist',[wishlistController::class,'manage_wishlist']);
Route::get('/deletewishlist/{id}',[wishlistController::class,'destroy']);

Route::get('/single_product/{id}',[productController::class,'singleproduct_edit']);
Route::get('/product_page/{id}',[productController::class,'product_category']);

 // Bakend routs 


Route::group(['middleware'=>['adminbeforelogin']],function(){
Route::post('/register',[adminController::class,'store']);
Route::get('/register',[adminController::class,'adminregisterpage']);
Route::get('/login',[adminController::class,'adminloginpage']);
Route::post('/login',[adminController::class,'adminlogin']);
 });

Route::group(['middleware'=>['adminafterlogin']],function(){
Route::get('/dashboard',[adminController::class,'dashboard']);

Route::post('/add_blog',[blogController::class,'add_blog']);
Route::get('/manage_blog',[blogController::class,'manage_blog']);
Route::get('/edit_blog/{id}',[blogController::class,'edit_blog']);
Route::post('/edit_blog/{id}',[blogController::class,'blog_update']);
Route::get('/delete_blog/{id}',[blogController::class,'destroy']);

 Route::get('/add_category',[categoryController::class,'add_categorypage']);
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

 Route::get('/profile',[adminController::class,'show']);
 Route::get('/editprofile/{id}',[adminController::class,'edit']);
 Route::post('/editprofile/{id}',[adminController::class,'update']);

 Route::get('/logout',[adminController::class,'logout']);
}); 


// Route::get('/dashboard', function () {
//     return view('backend.dashboard');
// });

Route::get('/add_blog', function () {
    return view('backend.add_blog');
});


Route::get('/calendar', function () {
    return view('backend.calendar');
});

Route::get('/colors', function () {
    return view('backend.colors');
});



Route::get('/lockscreen', function () {
    return view('backend.lockscreen');
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


