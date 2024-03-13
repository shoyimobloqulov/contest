<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('profile/{username}',[UserController::class,'profile'])->name('profile');
Route::post('password/reset',[ResetPasswordController::class,'reset'])->name('password.update');
Route::post('presonal/reset',[UserController::class,'presonal'])->name('presonal.update');
Route::get('users',[UserController::class,'UserList'])->name('users');
Route::get('system',[UserController::class,'system'])->name('system');
Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
