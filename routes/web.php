<?php

use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\FormRsfController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController as FrontEndHomeController;
use App\Http\Controllers\Backend\HomeController as BackEndHomeController;
use App\Http\Controllers\Backend\SurveyController;
use App\Http\Controllers\Frontend\SurveyControllerFront;
use App\Http\Controllers\Frontend\FormRsfControllerFront;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Frontend\FormsController;
use App\Models\form_rsf;
use App\Models\User;

use function Livewire\store;

Auth::routes();

Route::middleware(['auth', 'role:admin'])->prefix('admin')->group(function () {

    Route::get('/profile', [BackEndHomeController::class, 'profile'])->name('profile');
    Route::get('/dashboard', [BackEndHomeController::class, 'index'])->name('dashboard');

    // USERS
    Route::group(['prefix' => 'users'], function () {
        Route::get('/', [UserController::class, 'index'])->name('users.index');
        Route::get('/create', [UserController::class, 'create'])->name('users.create');
        Route::post('/', [UserController::class, 'store'])->name('users.store');
        Route::get('/{id}', [UserController::class, 'show'])->name('users.show');
        Route::get('/edit/{id}', [UserController::class, 'edit'])->name('users.edit');
        Route::put('/{id}', [UserController::class, 'update'])->name('users.update');
        Route::delete('/{id}', [UserController::class, 'destroy'])->name('users.destroy');
    });

    Route::group(['prefix' => 'forms'], function () {
        Route::group(['prefix' => 'rsf'], function () {
            Route::get('/', [FormRsfController::class, 'index'])->name('rsf.index');
            Route::get('/create', [FormRsfController::class, 'create'])->name('rsf.create');
            Route::post('/', [FormRsfController::class, 'store'])->name('rsf.store');
            Route::delete('/{id}', [FormRsfController::class, 'destroy'])->name('rsf.destroy');
            Route::get('/{id}', [FormRsfController::class, 'show'])->name('rsf.show');
        });
    });

    //SURVEYS
    Route::group(['prefix' => 'surveys'], function () {
         Route::get('/', [SurveyController::class, 'index'])->name('surveys.index');
         Route::get('/create', [SurveyController::class, 'create'])->name('surveys.create');
         Route::post('/', [SurveyController::class, 'store'])->name('surveys.store');
    //     Route::get('/{id}', [SurveyController::class, 'show'])->name('surveys.show');
    //     Route::get('/edit/{id}', [SurveyController::class, 'edit'])->name('surveys.edit');
    //     Route::put('/{id}', [SurveyController::class, 'update'])->name('surveys.update');
    //     Route::delete('/{id}', [SurveyController::class, 'destroy'])->name('surveys.destroy');
    });

    Route::group(['prefix' => 'dashboard_detail'], function () {
        Route::get('/', [DashboardController::class, 'index'])->name('dashboard_detail.index');
    });

    //FORM RSF
    Route::group(['prefix' => 'form_rsf'], function () {
        Route::get('/', [FormRsfController::class, 'index'])->name('form_rsf.index');
        Route::delete('/{id}', [FormRsfController::class, 'destroy'])->name('form_rsf.destroy');

    });


});

// Route::middleware(['auth', 'role:customer'])->prefix('my-account')->group(function () {

// });
    Route::group(['prefix' => 'people'], function () {
        Route::group(['prefix' => 'surveys'], function () {
            // SURVEYS FRONTEND
            Route::get('/create', [SurveyControllerFront::class, 'create'])->name('surveys.front.create');
            Route::post('/', [SurveyControllerFront::class, 'store'])->name('surveys.front.store');
        });
        Route::group(['prefix' => 'form-rsf'], function () {
            //FORM RSF FRONTEND
            Route::get('/create', [FormRsfControllerFront::class, 'create'])->name('rsf.front.create');
            Route::post('/', [FormRsfControllerFront::class, 'store'])->name('rsf.front.store');

        });

    });

// FRONTEND INDEX
Route::get('/', [FrontEndHomeController::class, 'index'])->name('home');
Route::get('/form_index', [FormsController::class, 'index'])->name('form.index');








