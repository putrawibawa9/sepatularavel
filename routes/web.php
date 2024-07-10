<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SepatuController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/sepatu', SepatuController::class);
