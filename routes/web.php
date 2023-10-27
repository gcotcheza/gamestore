<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\ContactController;

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

Route::resource('/', HomeController::class);
Route::resource('/shop', ShopController::class)->only(['index', 'show']);

Route::get('/contact', [ContactController::class, 'index'])->name('contact');

Route::get('/home', [HomeController::class, 'index'])->name('home');
