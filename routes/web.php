<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AuthController;


Route::get('/', [AuthController::class, 'login'])->name('login');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register-user', [AuthController::class, 'register_user'])->name('registration');
Route::post('/login', [AuthController::class, 'login_user'])->name('login-user');
Route::post('logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::get('/contact/create', [ContactController::class, 'create'])->name('add-contact');
Route::get('/contact/edit/{id}', [ContactController::class, 'edit'])->name('edit-contact');
Route::post('/contact/store', [ContactController::class, 'store'])->name('save-contact');
Route::put('/contact/update/{id}', [ContactController::class, 'update'])->name('update-contact');
Route::delete('/contact/delete/{id}', [ContactController::class, 'destroy'])->name('delete-contact');
