<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\AppointmentController;

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
        Route::get('/servicePage',[AdminController::class,'servicePage'])->name('admin#service');
        Route::get('/createServicePage',[ServiceController::class,'createServicePage'])->name('create#servicePage');
        Route::post('/createService',[ServiceController::class,'createService'])->name('create#service');
        Route::get('/deleteService/{id}',[ServiceController::class,'deleteService'])->name('delete#service');
        Route::get('/editServicePage/{id}',[ServiceController::class,'editServicePage'])->name('edit#servicePage');
        Route::post('/updateService',[ServiceController::class,'updateService'])->name('update#service');
    });
});

//User
Route::middleware(['user_auth'])->group(function(){
    Route::prefix('user')->group(function () {
        Route::get('/homePage',[UserController::class,'homePage'])->name('user#home');
        Route::get('/appointment',[AppointmentController::class,'appointmentPage'])->name('user#appointment');
        Route::post('/createAppointment',[AppointmentController::class,'createAppointment'])->name('appointment#create');
        Route::get('/servicePage',[UserController::class,'servicePage'])->name('user#service');
        Route::get('/aboutusPage',[UserController::class,'aboutusPage'])->name('user#aboutus');
        Route::get('/contactPage',[UserController::class,'contactPage'])->name('user#contact');
        Route::post('/contactInfo',[UserController::class,'contactInfo'])->name("user#contactInfo");

    });

});

});



