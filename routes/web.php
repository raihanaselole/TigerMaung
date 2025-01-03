<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProgresController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReminderController;
use App\Http\Controllers\StatisticController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Middleware\RoleMiddleware;
use App\Models\Reminder;

// Landing page routes
Route::get('/', function () {
    return view('/landingpage/index');
})->name('landingpage');

Route::get('/landingpage/login', function () {
    return view('/landingpage/login');
})->name('login');

Route::get('/users', [UserController::class, 'index'])->name('users.index');
// Route untuk detail pengguna
Route::get('/users/show/{id}', [UserController::class, 'show'])->name('users.show');
Route::delete('/users/destroy/{id}', [UserController::class, 'destroy'])->name('users.index');

// Route::get('/landingpage/register', function () {
//     return view('/landingpage/register');
// })->name('register');

Route::get('/landingpage/register', [RegisteredUserController::class, 'create'])->name('register');
Route::post('/landingpage/register', [RegisteredUserController::class, 'store']);

// Rute untuk administrator - hanya bisa mengakses /users
Route::middleware([RoleMiddleware::class . ':administrator'])->group(function () {
    Route::get('/users', [UserController::class, 'index'])->name('users.index');
    Route::get('/users/show/{id}', [UserController::class, 'show'])->name('users.show');
    Route::delete('/users/destroy/{id}', [UserController::class, 'destroy'])->name('users.destroy');
});


// Rute untuk mahasiswa
Route::middleware([RoleMiddleware::class . ':mahasiswa'])->group(function () {
    Route::prefix('dashboard')->group(function () {
        Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
        Route::prefix('progres')->group(function () {
            Route::get('/', [ProgresController::class, 'index']);
            Route::get('/create', [ProgresController::class, 'create']);
            Route::get('/show/{id}', [ProgresController::class, 'show']);
            Route::post('/store', [ProgresController::class, 'store']);
            Route::get('/edit/{id}', [ProgresController::class, 'edit']);
            Route::put('/update/{id}', [ProgresController::class, 'update']);
            Route::delete('/destroy/{id}', [ProgresController::class, 'destroy']);
        });

        Route::prefix('reminders')->group(function () {
            Route::get('/', [ReminderController::class, 'index']);
            Route::get('/create', [ReminderController::class, 'create']);
            Route::get('/show/{id}', [ReminderController::class, 'show']);
            Route::post('/store', [ReminderController::class, 'store']);
            Route::get('/edit/{id}', [ReminderController::class, 'edit']);
            Route::put('/update/{id}', [ReminderController::class, 'update']);
            Route::delete('/destroy/{id}', [ReminderController::class, 'destroy']);
        });

        Route::prefix('statistik')->group(function () {
            Route::get('/', [StatisticController::class, 'index']);
        });
    });
});


//     // Profile routes
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

// Auth routes
require __DIR__ . '/auth.php';
