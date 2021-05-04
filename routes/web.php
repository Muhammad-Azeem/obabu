<?php

use App\Http\Controllers\Admin\SiteController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\PackageController;
use App\Http\Controllers\Admin\InterestController;
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
//Route::get('/',function() => view('welcome'));

Route::get('/rooms', [VideoStreamingController::class,'index'])->name('room.index');

Route::group(['prefix' => 'room' , 'as' => 'room.'],function() {

    Route::get('join/{room}', [VideoStreamingController::class, 'join'])->name('join');
    Route::post('create', [VideoStreamingController::class, 'create'])->name('create');


});
Route::get('/', function () {
    return view('home.index');

});

Route::get('/main',function(){
   return view('');
});


Route::get('/dashboard', [SiteController::class, 'dashboard'])->name('dashboard');

Route::get('/users/teacher', [UserController::class, 'teacherIndex'])->name('page.teacher-index');
Route::get('/users/children', [UserController::class, 'childrenIndex'])->name('page.children-index');
Route::get('/users/parent', [UserController::class, 'parentIndex'])->name('page.parent-index');
Route::get('/users/coordinator', [UserController::class, 'coordinatorIndex'])->name('page.coordinator-index');

Route::get('/users/teacher/create', [UserController::class, 'teacherCreate'])->name('page.teachercreate');
Route::get('/users/children/create', [UserController::class, 'childrenCreate'])->name('page.childrencreate');
Route::get('/users/parent/create', [UserController::class, 'parentCreate'])->name('page.parentcreate');
Route::get('/users/coordinator/create', [UserController::class, 'coordinatorCreate'])->name('page.coordinatorCreate');

Route::get('/users/teacher/{id}/edit', [UserController::class, 'edit'])->name('teacher.edit');
Route::get('/users/children/{id}/edit', [UserController::class, 'edit'])->name('children.edit');
Route::get('/users/parent/{id}/edit', [UserController::class, 'edit'])->name('parent.edit');

Route::post('/users/parent/{id}/update', [UserController::class, 'update'])->name('page.update');

Route::post('/users/childrens', [UserController::class, 'store'])->name('page.store');

//interest
Route::get('/interest', [InterestController::class, 'index'])->name('interest.index');
Route::get('/hobby', [InterestController::class, 'hobbyIndex'])->name('hobby.index');

Route::get('/interest/create', [InterestController::class, 'create'])->name('interest.create');
Route::post('/interest/', [InterestController::class, 'store'])->name('interest.store');
Route::get('/interest/{id}/edit', [InterestController::class, 'edit'])->name('interest.edit');
Route::put('/interest/{id}/update', [InterestController::class, 'update'])->name('interest.update');
Route::delete('/interest/{id}', [InterestController::class, 'destroy'])->name('interest.destroy');




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
Route::post('/payment', [\App\Http\Controllers\HomeController::class,'payment'])->name('payment');
Route::post('/charge', [\App\Http\Controllers\HomeController::class,'charge'])->name('charge');
Route::get('/discount_membership', [\App\Http\Controllers\HomeController::class,'discount_membership'])->name('discount_membership');
Route::get('/home', [\App\Http\Controllers\HomeController::class,'index'])->name('home');
Route::get('/sales', [\App\Http\Controllers\HomeController::class,'sales'])->name('sales');
Route::get('/about-us', [\App\Http\Controllers\HomeController::class,'about_us'])->name('about_us');


Route::post('update_user_profile','user\studentController@updateProfile')->name('update_user_profile');
Route::post('update_teacher_profile','user\teacherController@updateProfile')->name('update_teacher_profile');
Route::post('update_student_education','user\studentController@updateEducation')->name('update_student_education');
Route::post('edit_language','user\userController@updateLanguage')->name('edit_language');
Route::get('get_user_language','user\userController@getLanguage')->name('get_user_language');
Route::post('user_interest','user\userController@addInterest')->name('user_interest');
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
Route::get('/teacher', 'user\teacherController@teacherIndex')->middleware('auth');
Route::get('/student', 'user\studentController@studentProfile')->middleware('auth');
Route::get('/coming-soon', function () {
    return view('home.coming-soon');
});

Route::get('/community-teacher', function () {
    return view('home.community');
});
Route::get('/community-student','user\studentController@studentCommunity')->middleware('auth');

Route::get('/activity', function () {
    return view('home.activity');
});
