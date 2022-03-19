<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class , 'index']);
Route::get('/shop', [HomeController::class , 'shop']);
Route::get('/contact', [HomeController::class , 'contact']);
Route::get('/item', [HomeController::class , 'item']);