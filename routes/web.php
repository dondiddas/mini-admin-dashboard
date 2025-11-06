<?php

use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RetrieveAdminName;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//  Dashboard via Controller
Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

// Auth required group
Route::middleware(['auth'])->group(function () {

    // Students Routes
    Route::get('/students', [StudentController::class, 'index'])->name('students.index');
    Route::get('/students/{id}', [StudentController::class, 'show'])->name('students.show');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::middleware(['auth'])->group(function () {

    // Admin registration form
    Route::get('/dashboard/register', [RegisterController::class, 'showAdminForm'])
        ->name('dashboard.register');

    // Store new user
    Route::post('/dashboard/register', [RegisterController::class, 'adminRegister'])
        ->name('dashboard.register.store');

     Route::get('/dashboard/admin-names',[RetrieveAdminName::class,'getAdminNames'])
        ->name('getAdminAccount');

});



require __DIR__.'/auth.php';
