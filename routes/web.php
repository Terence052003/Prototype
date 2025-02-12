<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

Route::controller(AdminController::class)->group(function () {
    Route::get('/', 'welcome');
    Route::get('/password', 'forget_password')->name('forget_password');
    Route::get('/dashboard','dashboard')->name('dashboard');
});
