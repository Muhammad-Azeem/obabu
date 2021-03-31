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
    return view('home.index');
});

//    Route::get('login','main\auth@login')->name('login');
//    Route::get('register','main\auth@register')->name('register');
Route::get('/membership', [\App\Http\Controllers\HomeController::class,'membership'])->name('membership');
Route::get('/discount_membership', [\App\Http\Controllers\HomeController::class,'discount_membership'])->name('discount_membership');
Route::get('/home', [\App\Http\Controllers\HomeController::class,'index'])->name('home');
Route::get('/sales', [\App\Http\Controllers\HomeController::class,'sales'])->name('sales');
Route::get('/about-us', [\App\Http\Controllers\HomeController::class,'about_us'])->name('about_us');

Auth::routes();

