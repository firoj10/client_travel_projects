<?php

use App\Http\Controllers\Backend\AdminController;

use App\Http\Controllers\Backend\ProfileController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\Frontend\HomeController;


use App\Http\Controllers\Frontend\PageController;
use App\Http\Controllers\Frontend\QuotationController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('frontend.home.home');
// });
Route::get('/',[HomeController::class, 'home'])->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


Route::get('admin/login',[AdminController::class, 'login'])->name('admin.login');



// page-route.................................................
Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/resortdetails/{id}', [HomeController::class, 'resortdetails'])->name('resortdetails');

Route::get('/resorts', [PageController::class, 'resorts'])->name('resorts');
Route::get('/packages', [PageController::class, 'packages'])->name('packages');
Route::get('/packagesdetails/{id}', [PageController::class, 'packagesdetails'])->name('packagesdetails');
Route::get('/experience', [PageController::class, 'experience'])->name('experience');
Route::get('/experiencedetails/{id}', [PageController::class, 'experiencedetails'])->name('experiencedetails');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');


//Quotation
Route::post('/submit-quotation', [QuotationController::class, 'store'])->name('quotation.store');
// Route::post('/quotation', [QuotationController::class, 'index'])->name('quotation.index');






Route::get('/send-welcome-email', [EmailController::class, 'sendWelcomeEmail']);





