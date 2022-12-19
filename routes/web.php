<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\User\UserController;

Route::get('/', [UserController::class, 'create']);

Route::post('/users', [UserController::class, 'store'])->name('users.save');