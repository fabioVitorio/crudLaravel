<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/', [UserController::class, 'index'])->name('index-user');
Route::get('/show-user/{user}', [UserController::class, 'show'])->name('show-user');
Route::get('/create-user', [UserController::class, 'create'])->name('create-user');
Route::post('/store-user', [UserController::class, 'store'])->name('store-user');
Route::get('/edit-user/{user}', [UserController::class, 'edit'])->name('edit-user');
Route::put('/update-user/{user}', [UserController::class, 'update'])->name('update-user');
Route::delete('/destroy-user/{user}', [UserController::class, 'destroy'])->name('destroy-user');
