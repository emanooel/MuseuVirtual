<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BannerController;
Route::get('/', function () {
    return view('welcome');
});
Route::get('/walace', [BannerController::class, 'index']);
