<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// ── Public frontend routes (keep all your existing ones) ──────────────
Route::get('/', fn() => view('frontend.pages.home'))->name('home');
Route::get('/marketplace', fn() => view('frontend.pages.marketplace'))->name('marketplace');
Route::get('/news', fn() => view('frontend.pages.news'))->name('news');
Route::get('/map_location', fn() => view('frontend.pages.map_location'))->name('map_location');
Route::get('/loan_calculator', fn() => view('frontend.pages.loan_calculator'))->name('loan_calculator');
Route::get('/contact', fn() => view('frontend.pages.contact'))->name('contact');
Route::get('/compare_cars', fn() => view('frontend.pages.compare_cars'))->name('compare_cars');

// Static frontend auth pages (your existing UI pages — keep for design reference)
Route::get('/user-login', fn() => view('frontend.auth.login'))->name('user-login');
Route::get('/user-registration', fn() => view('frontend.auth.registration'))->name('user-registration');

// ── Dashboard — smart redirect based on role ──────────────────────────
Route::get('/dashboard', function () {
    $user = auth()->user();
    if ($user->hasRole('buyer')) {
        return redirect()->route('buyer.dashboard');
    }
    if ($user->hasRole('seller')) {
        return redirect()->route('seller.dashboard');
    }
    if ($user->hasRole('business')) {
        return redirect()->route('business.dashboard');
    }
    // Fallback if no role assigned yet
    return view('dashboard');
})
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

// ── BUYER routes ──────────────────────────────────────────────────────
Route::middleware(['auth', 'role:buyer'])
    ->prefix('buyer')
    ->name('buyer.')
    ->group(function () {
        Route::get('/dashboard', fn() => view('dashboard.buyer', ['user' => auth()->user()]))->name('dashboard');
    });

// ── SELLER routes ─────────────────────────────────────────────────────
Route::middleware(['auth', 'role:seller'])
    ->prefix('seller')
    ->name('seller.')
    ->group(function () {
        Route::get('/dashboard', fn() => view('dashboard.seller', ['user' => auth()->user()]))->name('dashboard');
    });

// ── BUSINESS routes ───────────────────────────────────────────────────
Route::middleware(['auth', 'role:business'])
    ->prefix('business')
    ->name('business.')
    ->group(function () {
        Route::get('/dashboard', fn() => view('dashboard.business', ['user' => auth()->user()]))->name('dashboard');
    });

// ── Profile (Breeze default — keep as is) ─────────────────────────────
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
