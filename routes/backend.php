<?php

use App\Enums\UserRole;
use App\Http\Controllers\Backend\AccessibilityController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\EmailController;
use App\Http\Controllers\Backend\PageController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\ProjectController;
use App\Http\Controllers\Backend\SettingController;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')->middleware(['role:' . UserRole::SUPER_ADMIN->value, 'auth'])->group(function () {
    Route::get('dashboard', [DashboardController::class, 'index'])
        ->name('dashboard');

    Route::resource('projects', ProjectController::class);
    Route::resource('products', ProductController::class);
    Route::resource('pages', PageController::class)->except(['show']);
    Route::resource('accessibilities', AccessibilityController::class)->except(['show']);
    Route::resource('emails', EmailController::class)->except(['update', 'edit', 'create']);

    Route::patch('messages/{email}/read', [EmailController::class, 'mark_as_read'])
        ->name('messages.read');
    Route::patch('messages/{email}/fav', [EmailController::class, 'fav'])
        ->name('messages.fav');

    Route::controller(SettingController::class)->group(function () {
        Route::get('settings', 'index')->name('settings.index');
        Route::put('settings/update', 'update')->name('settings.update');
    });
});
