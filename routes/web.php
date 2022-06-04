<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CityController;
use App\Http\Controllers\VillageController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\PostController;





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
