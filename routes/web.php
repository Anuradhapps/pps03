<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CommonDataController;
use App\Http\Controllers\PestDataController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/commondata/create', [CommonDataController::class, 'create'])->name('commondata.create');
Route::post('/commondata/store', [CommonDataController::class, 'store'])->name('commondata.store');

Route::get('/pestdata/create', [PestDataController::class, 'create'])->name('pestdata.create');
Route::post('/pestdata/store', [PestDataController::class, 'store'])->name('pestdata.store');
