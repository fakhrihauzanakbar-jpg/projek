<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\MemberController;

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/books', function () {
//     return view('books.index');
// });
Route ::get('/books', [BookController::class, 'index']);
Route ::get('/categories', [CategoriesController::class, 'categories']);
Route::get('/members', [MemberController::class, 'index']);
