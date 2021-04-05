<?php

use App\Http\Controllers\Admin\SiteController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\PackageController;

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


Route::get('/dashboard', [SiteController::class, 'dashboard'])->name('dashboard');

Route::get('/users/teachers', [UserController::class, 'teacherListing'])->name('page.teacher-listing');
Route::get('/users/childrens', [UserController::class, 'childrenListing'])->name('page.children-listing');
Route::get('/users/parents', [UserController::class, 'parentListing'])->name('page.parent-listing');

Route::get('/packages/subscriber', [PackageController::class, 'subscriberIndex'])->name('subscriber.index');
Route::get('/packages/subscriber/{package}/edit', [PackageController::class, 'subscriberEdit'])->name('subscriber.edit');
Route::put('/packages/subscriber/{package}/update', [PackageController::class, 'subscriberUpdate'])->name('subscriber.update');
Route::delete('/packages/subscriber/{package}/delete', [PackageController::class, 'subscriberDestroy'])->name('subscriber.destroy');



Route::get('/packages/package', [PackageController::class, 'packageIndex'])->name('package.index');
Route::get('/packages/package/{package}/edit', [PackageController::class, 'packageEdit'])->name('package.edit');
Route::put('/packages/package/{package}/update', [PackageController::class, 'packageUpdate'])->name('package.update');
Route::delete('/packages/package/{package}/delete', [PackageController::class, 'destroy'])->name('package.destroy');

//    Route::get('login','main\auth@login')->name('login');
//    Route::get('register','main\auth@register')->name('register');
Route::get('/membership', [\App\Http\Controllers\HomeController::class,'membership'])->name('membership');
Route::get('/discount_membership', [\App\Http\Controllers\HomeController::class,'discount_membership'])->name('discount_membership');
Route::get('/home', [\App\Http\Controllers\HomeController::class,'index'])->name('home');
Route::get('/sales', [\App\Http\Controllers\HomeController::class,'sales'])->name('sales');
Route::get('/about-us', [\App\Http\Controllers\HomeController::class,'about_us'])->name('about_us');

Auth::routes();

