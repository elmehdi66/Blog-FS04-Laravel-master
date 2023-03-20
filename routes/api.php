<?php

use App\Http\Controllers\API\DataController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('categories',[DataController::class,'getCategory'])->middleware('auth:api');
Route::post('register',[DataController::class, 'register']);
