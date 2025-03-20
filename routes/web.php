<?php

use Illuminate\Support\Facades\Route;

Route::get('/admin', \App\Http\Controllers\AdminController::class);

Route::get('/', function () {
    return view('welcome');
});
