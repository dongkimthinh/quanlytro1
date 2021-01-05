<?php

use App\Http\Controllers\AboutusController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DetailsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\TypeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminLoginController;
use App\Http\Controllers\CheckOutController;
use App\Http\Controllers\CouponController;
use App\Http\Controllers\DichVuChungController;
use App\Http\Controllers\HieuUngController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PayMentController;
use App\Http\Controllers\SlideController;
use App\Http\Controllers\TrangThietBiController;
use App\Models\SlideModel;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::prefix('admin')->group(function () {
    //
    Route::get('/',[AdminLoginController::class,'loginadmin'])->name('loginadmin');
    Route::get('logout',[AdminLoginController::class,'logout'])->name('logoutadmin');
    Route::post('/',[AdminLoginController::class,'loginadminpost'])->name('loginadminpost');

    Route::get('/dashboard',[DashboardController::class,'dashboard'])->name('dashboard');
    Route::get('/room',[RoomController::class,'roomadmin'])->name('roomadmin');
    Route::post('/room',[RoomController::class,'roomadminpost'])->name('roomadminpost');
    Route::post('/edit',[RoomController::class,'editpostroomadmin'])->name('editpostroomadmin');
    Route::get('room/{id}',[RoomController::class,'roomadmindelete'])->name('roomadmindelete');

    Route::get('khachhang',[HomeController::class,'khachhangadmin'])->name('khachhangadmin');
    Route::post('khachhang',[HomeController::class,'editkhachhangadmin'])->name('editkhachhangadmin');
    Route::get('khachhang/{id}',[HomeController::class,'khachhangdelete'])->name('khachhangdelete');

    Route::get('hieuung',[HieuUngController::class,'hieuung'])->name('hieuung');
    Route::post('hieuungsetting',[HieuUngController::class,'hieuungsetting'])->name('hieuungsetting');

    Route::get('thietbi',[TrangThietBiController::class,'thietbi'])->name('thietbi');
    Route::post('thietbiadd',[TrangThietBiController::class,'thietbiadd'])->name('thietbiadd');
    Route::post('thietbiupdate',[TrangThietBiController::class,'thietbiupdate'])->name('thietbiupdate');
    Route::get('thietbidelete/{id}',[TrangThietBiController::class,'thietbidelete'])->name('thietbidelete');

    Route::get('slide',[SlideController::class,'slide'])->name('slide');
    Route::post('slideadd',[SlideController::class,'slideadd'])->name('slideadd');
    Route::post('slideupdate',[SlideController::class,'slideupdate'])->name('slideupdate');
    Route::get('slide/{id?}',[SlideController::class,'slidedelete'])->name('slidedelete');

    Route::post('typeroomsadminadd',[TypeController::class,'typeroomsadminadd'])->name('typeroomsadminadd');
    Route::post('typeroomsadminupdate', [TypeController::class,'typeroomsadminupdate'])->name('typeroomsadminupdate');
    Route::get('typeroom',[TypeController::class,'typeroomsadmin'])->name('typeroomsadmin');
    Route::get('typeroom/{id?}',[TypeController::class,'typeroomsadmindetele'])->name('typeroomsadmindetele');

    Route::get('dichvuchung',[DichVuChungController::class,'dichvuchung'])->name('dichvuchung');
    Route::post('editdichvuchung',[DichVuChungController::class,'editdichvuchung'])->name('editdichvuchung');
    Route::post('dichvuchungadd',[DichVuChungController::class,'dichvuchungadd'])->name('dichvuchungadd');

    Route::get('coupon',[CouponController::class,'coupon'])->name('coupon');
    Route::post('couponadd',[CouponController::class,'couponadd'])->name('couponadd');
    Route::post('couponupdate',[CouponController::class,'couponupdate'])->name('couponupdate');
    Route::get('coupondelete/{id}',[CouponController::class,'coupondelete'])->name('coupondelete');

    Route::get('orders',[OrderController::class,'orders'])->name('orders');
    Route::get('ordersdelete/{id?}',[OrderController::class,'ordersdelete'])->name('ordersdelete');
    Route::get('orders-details/{id?}',[OrderController::class,'orders_details'])->name('orders-details');

    Route::get('gioithieu',[AboutusController::class,'gioithieuadmin'])->name('gioithieuadmin');
    Route::post('gioithieuadd',[AboutusController::class,'gioithieuadd'])->name('gioithieuadd');
    Route::post('gioithieuupdate',[AboutusController::class,'gioithieuupdate'])->name('gioithieuupdate');
    Route::get('gioithieudelete/{id?}',[AboutusController::class,'gioithieudelete'])->name('gioithieudelete');

    Route::get('charts',[DashboardController::class,'charts'])->name('charts');
});

Route::get('/login',[LoginController::class,'showlogin'])->name('login');
Route::get('/logout',[LoginController::class,'logout'])->name('logout');

Route::post('/login',[LoginController::class,'login'])->name('loginpost');

Route::get('register',[RegisterController::class, 'register'])->name('register');
Route::post('/register',[RegisterController::class, 'store'])->name('registerpost');

Route::get('/',[HomeController::class,'index'])->name('index');
Route::get('/room',[RoomController::class,'room'])->name('rooms');
Route::get('/details',[DetailsController::class,'details'])->name('details');


Route::get('/contact',[ContactController::class,'contact'])->name('contact');


Route::get('/about-us',[AboutusController::class,'aboutus'])->name('about-us');
Route::get('type-about-us/{id?}',[AboutusController::class,'type_about_us'])->name('type-about-us');

Route::get('type-rooms/{id?}',[TypeController::class,'typerooms'])->name('type-rooms');


Route::get('/cart',[CartController::class,'cart'])->name('cart');
Route::post('addtoCart',[CartController::class,'addtoCart'])->name('addtoCart');
Route::get('trashcart/{id?}',[CartController::class,'trashcart'])->name('trashcart');
Route::get('updatecart/{id?}/{value?}',[CartController::class,'updatecart'])->name('updatecart');
// Route::get('/{search}',[HomeController::class,'search']);
Route::get('postghichu',[CartController::class,'postghichu'])->name('postghichu');

Route::post('check_coupon',[CartController::class,'check_coupon'])->name('check_coupon');
Route::get('remove_coupon',[CartController::class,'remove_coupon'])->name('remove_coupon');

Route::get('check-out',[CheckOutController::class,'checkout'])->name('checkout');

Route::get('mail',[CheckOutController::class,'mail'])->name('mail');


Route::get('payment',[PayMentController::class,'payment'])->name('payment');
Route::get('cancel',[PayMentController::class,'cancel'])->name('payment.cancel');
Route::get('payment/success',[PayMentController::class,'success'])->name('payment.success');


