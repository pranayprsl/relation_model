<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CityController;
use App\Http\Controllers\VillageController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CollegeController;
use App\Http\Controllers\SingerController;
use App\Http\Controllers\SongController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\SessionController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/add_city',[CityController::class,'add_city'])->name('add_city');
Route::get('/show/{id}',[CityController::class,'show'])->name('show');
Route::get('/showvillage/{id}',[VillageController::class,'showvillage'])->name('showvillage');



Route::get('/author',[AuthorController::class,'add_author'])->name('add_author');
Route::get('/post/{id}',[PostController::class,'add_post'])->name('add_post');
Route::get('/show/{id}',[PostController::class,'show'])->name('show');
Route::get('/showauthor/{id}',[AuthorController::class,'showauthor'])->name('showauthor');

Route::get('/index/{id}',[IndexController::class,'index'])->name('index');
Route::get('/add',[CollegeController::class,'add_college'])->name('add_college');

Route::get('/show/{id}',[CollegeController::class,'show'])->name('show');

Route::get('/singer',[SingerController::class,'add_singer'])->name('add_singer');
Route::get('/song',[SongController::class,'singer'])->name('song');

Route::get('/car',[CarController::class,'add_car'])->name('add_car');
Route::get('/customer',[CustomerController::class,'customer'])->name('customer');

Route::get('/show_song/{id}',[SongController::class,'show_song'])->name('show_song');
Route::get('/show_singer/{id}',[SingerController::class,'show_singer'])->name('show_singer');

Route::get('/show_cars/{id}',[CustomerController::class,'show_cars'])->name('show_cars');
Route::get('/show_customer/{id}',[CarController::class,'show_customer'])->name('show_customer');

Route::get('/welcome',[SessionController::class,'welcome'])->name('welcome');
Route::get('/logindata',[SessionController::class,'login'])->name('login');
Route::View('login','login');