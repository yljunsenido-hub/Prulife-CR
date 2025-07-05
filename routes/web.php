<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\IsAdmin;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\SCICController;

// Show public dashboard (no login required)
Route::view('/', 'dashboard')->name('dashboard');
Route::view('/dashboard', 'dashboard'); // Optional alias

// Redirect default /login to custom /adminLogin
Route::redirect('/login', '/adminLogin');

// Show the custom admin login form (GET)
Route::get('/adminLogin', function () {
    return view('auth.admin-login');
})->name('login');

// Handle admin login form submission (POST)
Route::post('/adminLogin', [AuthenticatedSessionController::class, 'store'])
    ->name('admin.login.submit');





Route::middleware(['auth', IsAdmin::class])->group(function () {
    Route::get('/admin/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');

    // ✅ New route for sampleImport view
    Route::get('admin/customer/import', [CustomerController::class, 'index'])->name('admin.customerImport');
    Route::post('admin/customer/import', [CustomerController::class, 'importExcelData'])->name('admin.customerImport.store');

    //SCIC Upload
    Route::get('admin/scic-upload', [SCICController::class, 'scicUpload'])->name('admin.scicUpload');
    Route::post('admin/scic-upload', [SCICController::class, 'importExcelData'])->name('admin.scicUpload.store');

    //SCIC View
    Route::get('admin/scic', [SCICController::class, 'scicView'])->name('admin.scicView');

    // Optional: Profile routes
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
