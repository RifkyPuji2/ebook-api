<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\AuthorController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('me',[AuthController::class, 'me']);

Route::resource('book', BookController::class)->except(
    ['create', 'edit']
);

Route::resource('authors', AuthorController::class)->except(
    ['create','edit']
);