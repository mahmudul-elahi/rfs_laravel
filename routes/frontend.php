<?php

use App\Http\Controllers\Frontend\AccessibilityController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\PageController;
use App\Http\Controllers\Frontend\ProductController;
use App\Http\Controllers\Frontend\ProjectController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('accessibility', [AccessibilityController::class, 'index'])->name('accessibility.index');
Route::get('accessibility/{accessibility:slug}', [AccessibilityController::class, 'show'])->name('accessibility.show_detail');
Route::get('contact', [ContactController::class, 'index'])->name('contact.index');
Route::post('contact', [ContactController::class, 'store'])->name('contact.store');

Route::get('projects', [ProjectController::class, 'index'])->name('projects.all');
Route::get('projects/{project:slug}', [ProjectController::class, 'show'])->name('projects.show_detail');

Route::get('products', [ProductController::class, 'index'])->name('products.all');
Route::get('products/{product:slug}', [ProductController::class, 'show'])->name('products.show_detail');
Route::get('pages/{page:slug}', [PageController::class, 'show'])->name('pages.show_detail');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
