<?php

use App\Http\Controllers\Controller;
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
Route::get('logout', [Controller::class, 'logout'])->name('logout');
Route::get('user/register', [UserController::class, 'register'])->name('user.register');
Route::post('user/save', [UserController::class, 'save'])->name('user.save');
Route::post('user/update', [UserController::class, 'update'])->name('user.update');
Route::get('user/login', [UserController::class, 'login'])->name('user.login');
Route::get('user/edit', [UserController::class, 'userEdit'])->name('user.edit');
Route::post('user/loginuser', [UserController::class, 'loginuser'])->name('user.loginuser');
Route::get('user/profile', [UserController::class, 'profile'])->name('user.profile');