<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('hallo');
});

Route::get("/login",[AuthController::class,"ShowLogin"])->name("login");
Route::post("/login",[AuthController::class,"login"]);
Route::get("/register",[AuthController::class,"showRegister"])->name("register");
Route::post("/register",[AuthController::class,"Register"]); 


Route::middleware('login' )->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    });
});