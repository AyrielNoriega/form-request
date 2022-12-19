<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\User\UserController;
use App\Http\Controllers\RoleController;

Route::get('/', [UserController::class, 'index']);

Route::get('/form-user', [UserController::class, 'create'])->name('form.user');

Route::post('/save-user', [UserController::class, 'store'])->name('users.save');

Route::get('/form-role', [RoleController::class, 'create'])->name('form.role');

Route::post('/save-role', [RoleController::class, 'store'])->name('role.save');

