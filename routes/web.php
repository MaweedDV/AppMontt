<?php

use App\Http\Controllers\Backend\FormRsfController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController as FrontEndHomeController;
use App\Http\Controllers\Backend\HomeController as BackEndHomeController;
use App\Http\Controllers\Backend\SurveyController;
use App\Http\Controllers\Backend\UserController;
use App\Models\User;

Auth::routes();

Route::middleware(['auth', 'role:admin'])->prefix('admin')->group(function () {

    Route::get('/dashboard', [BackEndHomeController::class, 'index'])->name('dashboard');

});

// Route::middleware(['auth', 'role:customer'])->prefix('my-account')->group(function () {

// });
Route::get('/', [FrontEndHomeController::class, 'index'])->name('home');

Route::get('/users-index', [UserController::class, 'index'])->name('users.index');

Route::get('/users', [UserController::class, 'create'])->name('users.create');

Route::post('/users', [UserController::class, 'store'])->name('users.store');

Route::get('/surveys', [SurveyController::class, 'index'])->name('surveys');

Route::get('/create', [SurveyController::class, 'create'])->name('surveys.create');

Route::get('/form_rsf', [FormRsfController::class, 'create'])->name('form_rsf.create');

Route::post('/form_rsf', [FormRsfController::class, 'store'])->name('form_rsf.store');



