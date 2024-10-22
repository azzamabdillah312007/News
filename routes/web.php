<?php

use App\Http\Controllers\BeritaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/' , [BeritaController::class ,'index']);
Route::get('/news' , [BeritaController::class ,'index']);