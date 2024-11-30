<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\BookingController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [WelcomeController::class, 'index'])->name('welcome');
Route::get('/about', [WelcomeController::class, 'about'])->name('about');
Route::get('/services', [WelcomeController::class, 'services'])->name('services');
Route::get('/packages', [WelcomeController::class, 'packages'])->name('packages');
Route::get('/blog', [WelcomeController::class, 'blog'])->name('blog');
Route::get('/contact', [WelcomeController::class, 'contact'])->name('contact');

//show pakage details
Route::get('package-details/{id}', [WelcomeController::class, 'details'])->name('package.details');
Route::get('blog-details/{id}', [WelcomeController::class, 'blog_details'])->name('blog.details');


Route::get('/Pending-Book', [BookingController::class, 'pending'])->name('pending.book');
Route::get('/Complete-Book', [BookingController::class, 'complete'])->name('complete.book');

//book now from homepage
Route::post('/Book-Request', [BookingController::class, 'bookReq'])->name('booking.request');

Route::post('/Save-Contract', [WelcomeController::class, 'addSave'])->name('contract.save');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/logout', [AuthenticatedSessionController::class, 'destroy'])
->name('logout');

require __DIR__.'/auth.php';
