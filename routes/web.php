<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CityController;
use App\Http\Controllers\VillageController;
use App\Http\Controllers\IndexController;



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
    return view('welcome');
});

Route::get('/add_city',[CityController::class,'add_city'])->name('add_city');
Route::get('/show/{id}',[CityController::class,'show'])->name('show');
Route::get('/showvillage/{id}',[VillageController::class,'showvillage'])->name('showvillage');

Route::get('/index/{id}',[IndexController::class,'index'])->name('index');
