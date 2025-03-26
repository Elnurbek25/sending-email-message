<?php

use App\Http\Controllers\AuthController;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('loginPage', [AuthController::class, 'loginPage'])->name('loginPage');
Route::get('registerPage', [AuthController::class, 'registerPage'])->name('registerPage');
Route::post('login', [AuthController::class, 'login'])->name('login')->middleware('verified');
Route::post('register', [AuthController::class, 'register'])->name('register');
Route::get('resendPage', [AuthController::class, 'resendPage'])->name('resendPage');

Route::get('/verify-email', [AuthController::class, 'verifyEmail']);
Route::post('/resend-verification', [AuthController::class, 'resend'])->name('resend.verification');
