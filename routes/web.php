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
        Route::post('/store', [App\Http\Controllers\AktaLahirController::class, 'store'])->name('akta-lahir.store');
        Route::get('/{aktaLahirId}', [App\Http\Controllers\AktaLahirController::class, 'show'])->name('akta-lahir.show');
        Route::post('/{aktaLahirId}/accept', [App\Http\Controllers\AktaLahirController::class, 'acceptAktaLahir'])->name('akta-lahir.accept');
        Route::post('/{aktaLahirId}/reject', [App\Http\Controllers\AktaLahirController::class, 'rejectAktaLahir'])->name('akta-lahir.reject');
        Route::get('/{aktaLahirId}/pdf', [App\Http\Controllers\AktaLahirController::class, 'generatePDF'])->name('akta-lahir.generatePDF');
        Route::get('/{aktaLahirId}/pdf/view', [App\Http\Controllers\AktaLahirController::class, 'viewPDF'])->name('akta-lahir.viewPDF');
    });

    Route::prefix('/akta-perkawinan')->group(function () {
        Route::get('', [App\Http\Controllers\AktaPerkawinanController::class, 'index'])->name('akta-perkawinan.index');
        Route::post('/store', [App\Http\Controllers\AktaPerkawinanController::class, 'store'])->name('akta-perkawinan.store');
        Route::get('/{aktaPerkawinanId}', [App\Http\Controllers\AktaPerkawinanController::class, 'show'])->name('akta-perkawinan.show');
        Route::post('/{aktaPerkawinanId}/accept', [App\Http\Controllers\AktaPerkawinanController::class, 'acceptAktaPerkawinan'])->name('akta-perkawinan.accept');
        Route::post('/{aktaPerkawinanId}/reject', [App\Http\Controllers\AktaPerkawinanController::class, 'rejectAktaPerkawinan'])->name('akta-perkawinan.reject');
        Route::get('/{aktaPerkawinanId}/pdf', [App\Http\Controllers\AktaPerkawinanController::class, 'generatePDF'])->name('akta-perkawinan.generatePDF');
        Route::get('/{aktaPerkawinanId}/pdf/view', [App\Http\Controllers\AktaPerkawinanController::class, 'viewPDF'])->name('akta-perkawinan.viewPDF');
    });

    Route::prefix('/petugas')->group(function () {
        Route::get('', [App\Http\Controllers\PetugasController::class, 'index'])->name('petugas.index');
        Route::post('/store', [App\Http\Controllers\PetugasController::class, 'store'])->name('petugas.store');
    });
});

require __DIR__.'/auth.php';
