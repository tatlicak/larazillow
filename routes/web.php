<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ListingController;
use App\Http\Controllers\UserAccountController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
 Route::get('/', [IndexController::class,'index'])->name('index');
 Route::get('show', [IndexController::class,'show'])->name('show');

 Route::resource('listing', ListingController::class)->middleware('auth')->except(['index','show']);
 Route::resource('listing', ListingController::class)->only(['index','show']);
 Route::get('login', [AuthController::class, 'create'])->name('login');
 Route::post('login', [AuthController::class, 'store'])->name('login.store');
Route::delete('logout', [AuthController::class, 'destroy'])->name('logout');

Route::resource('user-account', UserAccountController::class)->only(['create', 'store']);
