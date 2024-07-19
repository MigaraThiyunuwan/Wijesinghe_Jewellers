<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\CustomizationController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\GemBusinessController;
use App\Http\Controllers\ManagerController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\LeaderController;
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

// Route::get('/messages', function () {
//     return view('messages'); 
// });


Route::get('/generate-hash', [Controller::class, 'generateHash'])->name('generate-hash');
Route::get('/payment/return', [Controller::class, 'paymentReturn'])->name('payment.return');
Route::get('/payment/cancel', [Controller::class, 'paymentCancel'])->name('payment.cancel');
Route::post('/payment/notify', [Controller::class, 'paymentNotify'])->name('payment.notify');


// Route::get('/', function () {return view('home');});

Route::get('/', [Controller::class, 'home'])->name('home');
Route::get('contactus', [Controller::class, 'contactus'])->name('contactus');
Route::get('logout', [Controller::class, 'logout'])->middleware('web')->name('logout');
Route::get('aboutus', [Controller::class, 'aboutus'])->name('aboutus');
Route::get('userlogin', [Controller::class, 'userlogin'])->name('userlogin');
Route::post('loginallusers', [Controller::class, 'loginallusers'])->name('loginallusers');


//Routes for user
Route::get('user/register', [UserController::class, 'register'])->name('user.register');
Route::post('user/save', [UserController::class, 'save'])->name('user.save');
Route::post('user/update', [UserController::class, 'update'])->name('user.update');
Route::post('user/paymentconfirm', [UserController::class, 'paymentconfirm'])->name('user.paymentconfirm');
Route::get('user/edit', [UserController::class, 'userEdit'])->name('user.edit');
Route::get('user/profile', [UserController::class, 'profile'])->name('user.profile');
Route::get('user/chat', [UserController::class, 'chat'])->name('user.chat');
Route::post('user/model', [UserController::class, 'model'])->name('user.model');
Route::get('/getModelId', [UserController::class, 'getModelId']);
Route::get('user/customize', [UserController::class, 'customizeform'])->name('user.customize');
Route::get('user/mycustomize', [UserController::class, 'mycustomize'])->name('user.mycustomize');
Route::get('user/mychat/{cus_req_id}', [UserController::class, 'customizechat'])->name('user.mychat');
Route::post('user/changepassword', [UserController::class, 'changepassword'])->name('user.changepassword');
Route::post('user/makerequest', [CustomizationController::class, 'makerequest'])->name('user.makerequest');
Route::post('user/sendmessage', [CustomizationController::class, 'addMessage'])->name('user.sendmessage');
Route::post('user/sendimage', [CustomizationController::class, 'addImage'])->name('user.sendimage');
Route::get('/get-chat-messages/{cus_req_id}', [CustomizationController::class, 'getmessages']);

//Routes for Manager
Route::get('manager/profile', [ManagerController::class, 'profile'])->name('manager.profile');
Route::get('manager/register', [ManagerController::class, 'register'])->name('manager.register');
Route::post('manager/save', [ManagerController::class, 'save'])->name('manager.save');
Route::get('manager/users', [ManagerController::class, 'users'])->name('manager.users');
Route::get('manager/leaders', [ManagerController::class, 'leaders'])->name('manager.leaders');
Route::get('manager/gembusiness', [ManagerController::class, 'gembusiness'])->name('manager.gembusiness');
Route::get('manager/necklace', [ManagerController::class, 'managernecklace'])->name('manager.necklace');
Route::get('manager/bracelet', [ManagerController::class, 'managerbracelet'])->name('manager.bracelet');
Route::get('manager/earring', [ManagerController::class, 'managerearring'])->name('manager.earring');
Route::get('manager/ring', [ManagerController::class, 'managerring'])->name('manager.ring');
Route::get('manager/pendingrequest', [ManagerController::class, 'pendingrequest'])->name('manager.unverifiedgembusiness');
Route::get('manager/pendingorders', [ManagerController::class, 'pendingorders'])->name('manager.pendingorders');
Route::get('manager/orderstobedelivered', [ManagerController::class, 'orderstobedelivered'])->name('manager.orderstobedelivered');
Route::get('manager/edit', [ManagerController::class, 'managerEdit'])->name('manager.edit');
Route::post('manager/update', [ManagerController::class, 'update'])->name('manager.update');
Route::post('manager/changepassword', [ManagerController::class, 'changepassword'])->name('manager.changepassword');
Route::put('manager/confirm/{business_id}', [ManagerController::class, 'confirm'])->name('manager.confirm');
Route::post('manager/deleteuser', [ManagerController::class, 'deleteuser'])->name('manager.deleteuser');  
Route::post('manager/deleteleader', [ManagerController::class, 'deleteleader'])->name('manager.deleteleader');  
Route::post('manager/deletegembusiness', [ManagerController::class, 'deletegembusiness'])->name('manager.deletegembusiness');
Route::post('manager/removeitem', [ManagerController::class, 'removeitem'])->name('manager.removeitem'); 
Route::post('manager/changequntity', [ManagerController::class, 'changeQuntity'])->name('manager.changequntity');
Route::post('manager/changeprice', [ManagerController::class, 'changePrice'])->name('manager.changeprice');
Route::post('manager/changematerialprice', [ManagerController::class, 'changematerialprice'])->name('manager.changematerialprice');
Route::post('manager/changecusgemprice', [ManagerController::class, 'changecusgemprice'])->name('manager.changecusgemprice');


//Routes for Gem Business Owner
Route::get('gem/profile', [GemBusinessController::class, 'profile'])->name('gem.profile');
Route::get('gem/register', [GemBusinessController::class, 'register'])->name('gem.register');
Route::get('gem/login', [GemBusinessController::class, 'login'])->name('gem.login');
Route::get('gem/edit', [GemBusinessController::class, 'edit'])->name('gem.edit');
Route::get('gem/add', [GemBusinessController::class, 'putadvertisement'])->name('gem.add');
Route::get('advertisement', [GemBusinessController::class, 'advertisement'])->name('advertisement');
Route::post('gem/logingem', [GemBusinessController::class, 'logingem'])->name('gem.logingem');
Route::post('gem/save', [GemBusinessController::class, 'save'])->name('gem.save');
Route::post('gem/editdetails', [GemBusinessController::class, 'editdetails'])->name('gem.editdetails');
Route::post('gem/changepassword', [GemBusinessController::class, 'changepassword'])->name('gem.changepassword');
Route::post('gem/putadvertisements', [GemBusinessController::class, 'putadvertisements'])->name('gem.putadvertisements');
Route::post('gem/delete', [GemBusinessController::class, 'delete'])->name('gem.delete');
Route::get('shop/gemDetails/{gemId}', [GemBusinessController::class, 'gemdetails'])->name('gem.gemDetails');


//Routes for Leader
Route::get('leader/register', [LeaderController::class, 'register'])->name('leader.register');
Route::post('leader/save', [LeaderController::class, 'save'])->name('leader.save');
Route::post('leader/update', [LeaderController::class, 'update'])->name('leader.update');
Route::get('leader/profile', [LeaderController::class, 'profile'])->name('leader.profile');
Route::get('leader/edit', [LeaderController::class, 'edit'])->name('leader.edit');
Route::post('leader/changepassword', [LeaderController::class, 'changepassword'])->name('leader.changepassword');
Route::post('leader/changestatus', [CustomizationController::class, 'changeOrderStatus'])->name('leader.changestatus');
Route::post('leader/uploadmodel', [CustomizationController::class, 'uploadmodel'])->name('leader.uploadmodel');
Route::post('leader/uploadtexture', [CustomizationController::class, 'uploadtexture'])->name('leader.uploadtexture');
Route::get('leader/mychat/{cus_req_id}', [LeaderController::class, 'chat'])->name('leader.mychat');


//Routes for Orders
Route::post('order/placeorder', [OrderController::class, 'placeorder'])->name('order.placeorder');
Route::post('order/changestatus', [OrderController::class, 'changestatus'])->name('order.changestatus');
Route::post('order/changecolumn', [OrderController::class, 'changecolumn'])->name('order.changecolumn');
Route::get('order/paymentconfirm/{order}', [OrderController::class, 'paymentconfirm'])->name('order.paymentconfirm');

//Routes for Items
Route::get('shop/necklaces', [ItemController::class, 'necklaces'])->name('shop.necklaces');
Route::get('shop/rings', [ItemController::class, 'rings'])->name('shop.rings');
Route::get('shop/earrings', [ItemController::class, 'earrings'])->name('shop.earrings');
Route::get('shop/bracelet', [ItemController::class, 'bracelet'])->name('shop.bracelet');
Route::get('shop/productDetails/{itemId}', [ItemController::class, 'productDetails'])->name('shop.productDetails');
Route::post('shop/save', [ItemController::class, 'save'])->name('shop.save');

//Routes for Cart
Route::get('cart', [CartController::class, 'showCart'])->name('cart.cart');
Route::post('cart/add', [CartController::class, 'addToCart'])->name('cart.add'); 
Route::post('cart/update', [CartController::class, 'updateCartItem'])->name('cart.update'); 
Route::post('cart/delete', [CartController::class, 'removeCartItem'])->name('cart.delete');
Route::get('cart/receiver', [CartController::class, 'receiver'])->name('cart.receiver');
Route::get('cart/return', [CartController::class, 'returnurl'])->name('cart.return');
Route::get('cart/notify', [CartController::class, 'notify'])->name('cart.notify');
Route::get('cart/cancel', [CartController::class, 'cancel'])->name('cart.cancel');

//Routes for Events   
Route::get('events/home', [EventController::class, 'home'])->name('events.home'); 