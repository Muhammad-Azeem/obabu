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

Route::get('/', function () {
    return view('welcome2');
});
Route::get('/users/teachers', [UserController::class, 'teacherListing'])->name('page.teacher-listing');
Route::get('/users/children', [UserController::class, 'childrenListing'])->name('page.children-listing');
Route::get('/users/parent', [UserController::class, 'parentListing'])->name('page.parent-listing');
//    Route::get('login','main\auth@login')->name('login');
//    Route::get('register','main\auth@register')->name('register');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
