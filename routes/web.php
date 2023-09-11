<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;

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

//dd(User::first()->toArray());

Route::controller(LoginController::class)->group(function(){
    Route::get('/', 'banner');
    Route::get('login', 'index')->name('login');
    Route::get('login/form', 'createAccount');
    Route::post('login/validacion', 'validacion');
});

Route::controller(HomeController::class)->group(function(){
    Route::post('home', 'index');
    Route::get('home/main', 'main')->middleware('auth');
    Route::get('home/story', 'story');
    Route::get('home/scores', 'scores');
    Route::post('home/logout', 'logout');
});

