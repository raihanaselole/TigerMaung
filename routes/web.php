<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProgresController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dash', function () {
    return view('/admin/index');
});

Route::prefix('dashboard/progres')->group(function () {
    Route::get('/', [ProgresController::class, 'index']);
    Route::get('/create', [ProgresController::class, 'create']);
    Route::get('/show/{id}', [ProgresController::class, 'show']);
    Route::post('/store', [ProgresController::class, 'store']);
    Route::get('/edit/{id}', [ProgresController::class, 'edit']);
    Route::put('/update/{id}', [ProgresController::class, 'update']);
    Route::delete('/destroy/{id}', [ProgresController::class, 'destroy']);
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
