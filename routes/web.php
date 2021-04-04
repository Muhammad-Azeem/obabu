<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VideoStreamingController;

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
Route::get('/',fn() => view('welcome'));

Route::get('/rooms', [VideoStreamingController::class,'index'])->name('room.index');

Route::group(['prefix' => 'room' , 'as' => 'room.'],function(){

   Route::get('join/{room}',[VideoStreamingController::class,'join'])->name('join');
   Route::post('create',[VideoStreamingController::class,'create'])->name('create');

});
