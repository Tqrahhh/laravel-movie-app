<?php

use App\Http\Controllers\MovieController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/movies', [MovieController::class, 'index']);


Route::get('/products', function () {
    return view('product');
});

Route::get('/genres', function () {
    return view('genre');
});

Route::get('/reviews', function () {
    return view('review');
});
