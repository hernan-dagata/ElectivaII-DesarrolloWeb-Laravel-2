<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\EditorialController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\EjemplarController;
use App\Http\Controllers\LoanController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
    Route::resource('authors', AuthorController::class);
    Route::resource('editorials', EditorialController::class);
    Route::resource('books', BookController::class);
    Route::resource('customers', CustomerController::class);
    Route::resource('ejemplars', EjemplarController::class);
    Route::resource('loans', LoanController::class);
});