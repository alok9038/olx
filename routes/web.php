<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ItemController;
use Illuminate\Support\Facades\Route;




Route::get("/", [ItemController::class,"index"])->name('home');
Route::get("/product/{id}", [ItemController::class,"singleItem"])->name('single.item');

Route::match(["get","post"],"/insert", [ItemController::class,"insert"])->name('insert');

Route::post("/insertcat", [ItemController::class,"insertCat"])->name("insertCat");
Route::get("/filter/{id}", [ItemController::class,"filter"])->name("filter");
Route::get("/search", [ItemController::class,"search"])->name("search");


Route::match(['get', 'post'],'/login', [AuthController::class,'login'])->name('login');
Route::match(['get', 'post'],'/register', [AuthController::class,'register'])->name('register');
