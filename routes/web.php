<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BasicController;
Route::get('/',[HomeController::class,'index']);
Route::get('/salam',[HomeController::class,'salam']);
route::get('/speed',[BasicController::class,'digi']);