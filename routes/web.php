<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GradeController;
use App\Models\Grade;
use Illuminate\Support\Facades\Route;


//guest middleware
Route::group(['middleware' => ['guest']], function () {

    Route::get('/', function () {
        return view('auth.sign-in');
    });
    Route::get('/sign-up', function () {
        return view('auth.sign-up');
    });

    //registration
    Route::post('/register', [AuthController::class, 'Register'])->name('Registration');
    //Login
    Route::post('/login', [AuthController::class, 'Authenticate'])->name('Authenticate');
});


//dashboard middleware
Route::group(['middleware' => ['auth']], function () {

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/dashboard/{user}/grades', [GradeController::class, 'showGrade'])->name('dashboard.show');

    Route::post('/delete/{id}', [GradeController::class, 'delete'])->name('dashboard.delete');
    // Route::get('/dashboard-grade', [GradeController::class, 'index'])->name('dashboard.grade');

    //Logout Route
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout.perform');
});
