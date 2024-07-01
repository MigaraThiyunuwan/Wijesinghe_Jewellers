<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\EventController;
use App\Http\Controllers\GemBusinessController;
use App\Http\Controllers\ManagerController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\UserController;
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


Route::get('/', function () {
    return view('index');
});
*/

Route::get('test', function () {
    return view('test');
});

// Route::get('/', function () {return view('home');});

Route::get('/', [Controller::class, 'home'])->name('home');
Route::get('logout', [Controller::class, 'logout'])->middleware('web')->name('logout');
Route::get('aboutus', [Controller::class, 'aboutus'])->name('aboutus');


//Routes for user
Route::get('user/register', [UserController::class, 'register'])->name('user.register');
Route::post('user/save', [UserController::class, 'save'])->name('user.save');
Route::post('user/update', [UserController::class, 'update'])->name('user.update');
Route::get('user/login', [UserController::class, 'login'])->name('user.login');
Route::get('user/edit', [UserController::class, 'userEdit'])->name('user.edit');
Route::post('user/loginuser', [UserController::class, 'loginuser'])->name('user.loginuser');
Route::get('user/profile', [UserController::class, 'profile'])->name('user.profile');
Route::post('user/changepassword', [UserController::class, 'changepassword'])->name('user.changepassword');

//Routes for Manager
Route::get('manager/profile', [ManagerController::class, 'profile'])->name('manager.profile');
Route::get('manager/register', [ManagerController::class, 'register'])->name('manager.register');
Route::post('manager/save', [ManagerController::class, 'save'])->name('manager.save');
Route::get('manager/login', [ManagerController::class, 'login'])->name('manager.login');
Route::get('manager/users', [ManagerController::class, 'users'])->name('manager.users');
Route::get('manager/pendingrequest', [ManagerController::class, 'pendingrequest'])->name('manager.unverifiedgembusiness');
Route::post('manager/loginmanager', [ManagerController::class, 'loginmanager'])->name('manager.loginmanager');
Route::get('manager/edit', [ManagerController::class, 'managerEdit'])->name('manager.edit');
Route::post('manager/update', [ManagerController::class, 'update'])->name('manager.update');
Route::post('manager/changepassword', [ManagerController::class, 'changepassword'])->name('manager.changepassword');
Route::put('manager/confirm/{business_id}', [ManagerController::class, 'confirm'])->name('manager.confirm');
Route::post('manager/deleteuser', [ManagerController::class, 'deleteuser'])->name('manager.deleteuser');


//Routes for Gem Business Owner
Route::get('gem/profile', [GemBusinessController::class, 'profile'])->name('gem.profile');
Route::get('gem/register', [GemBusinessController::class, 'register'])->name('gem.register');
Route::get('gem/login', [GemBusinessController::class, 'login'])->name('gem.login');
Route::get('gem/edit', [GemBusinessController::class, 'edit'])->name('gem.edit');
Route::post('gem/logingem', [GemBusinessController::class, 'logingem'])->name('gem.logingem');
Route::post('gem/save', [GemBusinessController::class, 'save'])->name('gem.save');
Route::post('gem/editdetails', [GemBusinessController::class, 'editdetails'])->name('gem.editdetails');
Route::post('gem/changepassword', [GemBusinessController::class, 'changepassword'])->name('gem.changepassword');

//Routes for Orders
Route::post('order/placeorder', [OrderController::class, 'placeorder'])->name('order.placeorder');
Route::post('order/changestatus', [OrderController::class, 'changestatus'])->name('order.changestatus');
Route::post('order/changecolumn', [OrderController::class, 'changecolumn'])->name('order.changecolumn');

//Routes for Items
Route::get('shop/necklaces', [ItemController::class, 'necklaces'])->name('shop.necklaces');
Route::get('shop/productDetails/{itemId}', [ItemController::class, 'productDetails'])->name('shop.productDetails');
Route::post('shop/save', [ItemController::class, 'save'])->name('shop.save');

//Routes for Cart
Route::get('cart', [CartController::class, 'showCart'])->name('cart.cart');
Route::post('cart/add', [CartController::class, 'addToCart'])->name('cart.add'); 
Route::post('cart/update', [CartController::class, 'updateCartItem'])->name('cart.update'); 
Route::post('cart/delete', [CartController::class, 'removeCartItem'])->name('cart.delete');
Route::get('cart/receiver', [CartController::class, 'receiver'])->name('cart.receiver');

//Routes for Events   
Route::get('events/home', [EventController::class, 'home'])->name('events.home'); 