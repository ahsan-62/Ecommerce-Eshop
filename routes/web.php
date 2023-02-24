<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\backend\CategoryController;
use App\Http\Controllers\backend\DashboardController;
use App\Http\Controllers\backend\TestimonialController;
use App\Http\Controllers\frontend\HomeController as FrontendHomeController;

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


// Route::group(['prefix' => 'admin'], function () {

//     Route::get('/home', [HomeController::class, 'index'])->name('home');
// });


Route::prefix('admin/')->group(function(){

Route::get('/login',[LoginController::class,'loginpage'])->name('admin.loginpage');
Route::post('/login',[LoginController::class,'login'])->name('admin.login');


Route::middleware(['auth'])->group(function(){
    Route::get('logout', [LoginController::class, 'logout'])->name('admin.logout');
    Route::get('dashboard', [DashboardController::class, 'dashboard'])->name('admin.dashboard');
    Route::resource('category', CategoryController::class);
    Route::resource('testimonial',TestimonialController::class);


});
});


Route::prefix('')->group(function(){

    Route::get('/',[HomeController::class,'home'])->name('home');

});

