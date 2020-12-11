<?php

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
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/login', [App\Http\Controllers\Auth\LoginController::class, 'index'])->name('index');
Route::post('/login', [App\Http\Controllers\Auth\LoginController::class, 'postLogin'])->name('postLogin');
Route::get('/register', [App\Http\Controllers\Auth\LoginController::class, 'register'])->name('register');
Route::post('/register', [App\Http\Controllers\Auth\LoginController::class, 'postRegister'])->name('postRegister');
Route::get('dashboard', [App\Http\Controllers\Auth\LoginController::class,'dashboard'])->name('dashboard'); 
Route::get('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');

Route::get('/emailverification/{id}',[App\Http\Controllers\VerificationController::class,'emailverification'])->name('emailverification');
Route::post('/verifyemail/{id}',[App\Http\Controllers\VerificationController::class,'verifyemail'])->name('verifyemail');
Route::get('/resendemailOtp/{id}',[App\Http\Controllers\VerificationController::class,'resendemailOtp'])->name('resendemailOtp');
Route::post('/editprofile/{id}',[App\Http\Controllers\UserController::class,'editprofile'])->name('editprofile');