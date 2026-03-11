<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend.pages.home');
})->name('home');

Route::get('/marketplace', function () {
    return view('frontend.pages.marketplace');
})->name('marketplace');

Route::get('/news', function () {
    return view('frontend.pages.news');
})->name('news');

Route::get('/map_location', function () {
    return view('frontend.pages.map_location');
})->name('map_location');

Route::get('/loan_calculator', function () {
    return view('frontend.pages.loan_calculator');
})->name('loan_calculator');

Route::get('/contact', function () {
    return view('frontend.pages.contact');
})->name('contact');

Route::get('/user-login', function () {
    return view('frontend.auth.login');
})->name('user-login');

Route::get('/user-registration', function () {
    return view('frontend.auth.registration');
})->name('user-registration');

Route::get('/compare_cars', function () {
    return view('frontend.pages.compare_cars');
})->name('compare_cars');

Route::get('/dashboard', function () {
    return view('dashboard');
})
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
