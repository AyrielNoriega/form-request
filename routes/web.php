<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\User\UserController;

Route::get('/', [UserController::class, 'index']);

Route::get('/form-user', [UserController::class, 'create'])->name('form.user');

Route::post('/save-user', [UserController::class, 'store'])->name('users.save');

