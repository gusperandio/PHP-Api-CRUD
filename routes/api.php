<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\AuthController;

Route::post('login', [AuthController::class, 'login'])->name('login');
Route::post('users', [UserController::class, 'store']);
Route::post('logout', [AuthController::class, 'logout'])->name('logout');

Route::group(['middleware' => 'jwt.auth'], function () {
    Route::get('users', [UserController::class, 'index'])->name('users.index')->middleware();
    Route::get('users/{id}', [UserController::class, 'show'])->name('users.show');
    Route::put('users/{id}', [UserController::class, 'update'])->name('users.update');
    Route::delete('users/{id}', [UserController::class, 'destroy'])->name('users.destroy');
});