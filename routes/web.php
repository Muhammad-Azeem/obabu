<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UserController;

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


Route::get('/main',function(){
   return view('');
});

//Route::get('/', function () {
//    return view('welcome2');
//});
Route::get('/users/teachers', [UserController::class, 'teacherListing'])->name('page.teacher-listing');
Route::get('/users/children', [UserController::class, 'childrenListing'])->name('page.children-listing');
Route::get('/users/parent', [UserController::class, 'parentListing'])->name('page.parent-listing');

//    Route::get('login','main\auth@login')->name('login');
//    Route::get('register','main\auth@register')->name('register');
Route::get('/membership', [\App\Http\Controllers\HomeController::class,'membership'])->name('membership');
Route::post('/payment', [\App\Http\Controllers\HomeController::class,'payment'])->name('payment');
Route::post('/charge', [\App\Http\Controllers\HomeController::class,'charge'])->name('charge');
Route::get('/discount_membership', [\App\Http\Controllers\HomeController::class,'discount_membership'])->name('discount_membership');
Route::get('/home', [\App\Http\Controllers\HomeController::class,'index'])->name('home');
Route::get('/sales', [\App\Http\Controllers\HomeController::class,'sales'])->name('sales');
Route::get('/about-us', [\App\Http\Controllers\HomeController::class,'about_us'])->name('about_us');

Auth::routes();

// Umair Work
Route::get('/join', function () {
    return view('home.join');
});
Route::get('/video', function () {
    return view('home.video');
});
Route::get('/success', function () {
    return view('home.success');
});
Route::get('/teacher', function () {
    return view('home.teacher_profile');
});
Route::get('/student', function () {
    return view('home.student_profile');
});
Route::get('/coming-soon', function () {
    return view('home.coming-soon');
});