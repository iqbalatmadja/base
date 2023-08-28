<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LabController;
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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/login',[AuthController::class,'login'])->name('login');
Route::post('/processlogin',[AuthController::class,'processlogin'])->name('login.process');
Route::get('/registration',[AuthController::class,'registration'])->name('registration');
Route::post('/saveregistration',[AuthController::class,'saveregistration'])->name('registration.save');
Route::post('/logout',[AuthController::class,'logout'])->name('logout');

Route::get('/lab',[LabController::class,'index'])->name('lab');

Route::get('/dashboard',[AuthController::class,'dashboard'])->name('dashboard');


/*
Route::controller(AuthController::class)->group(function(){
    Route::get('/login','login')->name('login');
    Route::get('/registration','register')->name('registration');
});
*/

/*
Route::controller(LoginRegisterController::class)->group(function() {
    Route::get('/register', 'register')->name('register');
    Route::post('/store', 'store')->name('store');
    Route::get('/login', 'login')->name('login');
    Route::post('/authenticate', 'authenticate')->name('authenticate');
    Route::get('/dashboard', 'dashboard')->name('dashboard');
    Route::post('/logout', 'logout')->name('logout');
});
*/
