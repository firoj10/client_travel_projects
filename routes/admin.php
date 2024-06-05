<?php
use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\ExperienceController;
use App\Http\Controllers\Backend\PackageController;
use App\Http\Controllers\Backend\ProfileController;
use App\Http\Controllers\Backend\QuotationviewController;
use App\Http\Controllers\Backend\StayController;
use Illuminate\Support\Facades\Route;


// admin routes........................
Route::get('dashboard', [AdminController::class, 'dashboard'])->middleware(['auth', 'role:admin'])->name('dashboard');
Route::get('profile', [ProfileController::class, 'index'])->name('profile');
Route::post('profile/update', [ProfileController::class, 'updateProfile'])->name('profile.update');
Route::post('profile/update/password', [ProfileController::class, 'updatePassword'])->name('password.update');

//Stay-route 
Route::resource('stay', StayController::class);

//Package-route
Route::resource('package', PackageController::class);

//Experience-route
Route::resource('experience', ExperienceController::class);

Route::get('quotation', [QuotationviewController::class, 'index'])->name('quotation');

