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
Route::get('user/register', [UserController::class, 'register'])->name('user.register');
Route::post('user/save', [UserController::class, 'save'])->name('user.save');
Route::get('user/login', [UserController::class, 'login'])->name('user.login');
Route::post('user/loginuser', [UserController::class, 'loginuser'])->name('user.loginuser');