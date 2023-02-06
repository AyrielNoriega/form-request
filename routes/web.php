<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\User\UserController;
use App\Http\Controllers\RoleController;

Route::get('/', [UserController::class, 'index'])->name('main');

Route::prefix('users')->group(function () {
    Route::controller(UserController::class)->group(function () {
        Route::name('user.')->group(function () {
            Route::get('/form-user', 'create')->name('form');
            Route::post('/save-user', 'store')->name('save');
        });
    });
});


Route::get('/form-role', [RoleController::class, 'create'])->name('form.role');

Route::post('/save-role', [RoleController::class, 'store'])->name('role.save');

Route::fallback(function () {
    // Route::redirect('/', [UserController::class, 'index']);
    return redirect()->route('main');
});