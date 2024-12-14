<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProgresController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReminderController;

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


Route::middleware('auth')->group(function () {
    Route::get('/reminders', [ReminderController::class, 'index'])->name('reminders.index');
    Route::get('/reminders/create', [ReminderController::class, 'create'])->name('reminders.create');
    Route::post('/reminders', [ReminderController::class, 'store'])->name('reminders.store');
    Route::get('/reminders/{reminder}', [ReminderController::class, 'show'])->name('reminders.show');
    Route::get('/reminders/{reminder}/edit', [ReminderController::class, 'edit'])->name('reminders.edit');
    Route::put('/reminders/{reminder}', [ReminderController::class, 'update'])->name('reminders.update');
    Route::delete('/reminders/{reminder}', [ReminderController::class, 'destroy'])->name('reminders.destroy');
});



require __DIR__.'/auth.php';
