<?php

use App\Http\Controllers\Admin\SuperAdminController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\ItemController;
use App\Http\Controllers\Admin\CarController;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')->name('admin.')->group(function () {
    // cheking route
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'store'])->name('login.store');

    Route::middleware(['auth' , 'check.admin'])->group(function () {
        Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
        Route::get('/system-logo', [DashboardController::class, 'system_logo'])->name('system_logo');

        // SUPER ADMIN
        Route::prefix('super-admins')->controller(SuperAdminController::class)->group(function(){
            Route::get('/', 'index')->name('super-admins.index');
            Route::get('/create', 'create')->name('super-admins.create');
            Route::post('/create/store', 'store')->name('super-admins.store');
            Route::get('/edit/{id}', 'edit')->name('super-admins.edit');
            Route::put('/edit/update/{id}', 'update')->name('super-admins.update');
            Route::get('/show/{id}', 'show')->name('super-admins.show');
            Route::delete('/destroy/{id}', 'destroy')->name('super-admins.destroy');
        });

        // ADMIN
        Route::prefix('admins')->controller(AdminController::class)->group(function(){
            Route::get('/', 'index')->name('admins.index');
            Route::get('/create', 'create')->name('admins.create');
            Route::post('/create/store', 'store')->name('admins.store');
            Route::get('/edit/{id}', 'edit')->name('admins.edit');
            Route::put('/edit/update/{id}', 'update')->name('admins.update');
            Route::get('/show/{id}', 'show')->name('admins.show');
            Route::delete('/destroy/{id}', 'destroy')->name('admins.destroy');
        });

        // ITEM
        Route::prefix('items')->controller(AdminController::class)->group(function(){
            Route::get('/', 'index')->name('items.index');
            Route::get('/create', 'create')->name('items.create');
            Route::post('/create/store', 'store')->name('items.store');
            Route::get('/edit/{id}', 'edit')->name('items.edit');
            Route::put('/edit/update/{id}', 'update')->name('items.update');
            Route::get('/show/{id}', 'show')->name('items.show');
            Route::delete('/destroy/{id}', 'destroy')->name('items.destroy');
        });

        // ITEM
        Route::prefix('cars')->controller(CarController::class)->group(function(){
            Route::get('/', 'index')->name('cars.index');
            Route::get('/create', 'create')->name('cars.create');
            Route::post('/create/store', 'store')->name('cars.store');
            Route::get('/edit/{id}', 'edit')->name('cars.edit');
            Route::put('/edit/update/{id}', 'update')->name('cars.update');
            Route::get('/show/{id}', 'show')->name('cars.show');
            Route::delete('/destroy/{id}', 'destroy')->name('cars.destroy');
        });



    });
});
