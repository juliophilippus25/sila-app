<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::prefix('/akta-lahir')->group(function () {
        Route::get('', [App\Http\Controllers\AktaLahirController::class, 'index'])->name('akta-lahir.index');
    });

    Route::prefix('/akta-perkawinan')->group(function () {
        Route::get('', [App\Http\Controllers\AktaPerkawinanController::class, 'index'])->name('akta-perkawinan.index');
    });
});

require __DIR__.'/auth.php';
