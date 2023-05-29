<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/invoice', function () {
    return view('invoice');
});

//Route::get('/phone', function () {
//    return view('phone');
//});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/phone',[App\Http\Controllers\phoneController::class,'phonetype'])->name('phonetype');

Route::post('/invoice',[App\Http\Controllers\phoneController::class,'invoice'])->name('invoice');

Route::get('/checkout/{id}',[App\Http\Controllers\phoneController::class,'checkout'])->name('checkout');