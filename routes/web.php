<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;

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

// login/register page
Route::redirect('/','loginPage');
Route::get('loginPage',[AuthController::class,'loginPage'])->name('auth#loginPage');
Route::get('registerPage',[AuthController::class,'registerPage'])->name('auth#registerPage');


Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])->group(function () {

//dashboard
Route::get('dashboard',[AuthController::class,'dashboard'])->name('dashboard');

//Admin
Route::middleware(['admin_auth'])->group(function(){
    Route::prefix('admin')->group(function () {
        Route::get('/homePage',[AdminController::class,'homePage'])->name('admin#home');
    });
});

//User
Route::middleware(['user_auth'])->group(function(){
    Route::prefix('user')->group(function () {
        Route::get('/homePage',[UserController::class,'homePage'])->name('user#home');
    });
});

});



