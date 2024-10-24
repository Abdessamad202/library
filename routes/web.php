<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LogInController;
use App\Http\Controllers\SignUpController;
use App\Http\Controllers\ProjectController;

Route::get('/login',[LogInController::class,"index"])->name("login.index");
Route::post('/check',[LogInController::class,"check"])->name("login.check");


Route::get('/signup', [SignUpController::class,"index"])->name("signup.index");
Route::post('/signup/store', [SignUpController::class,"store"])->name("signup.store");
Route::get("/home",[ProjectController::class,"home"])->name("home");
// prohe agile
