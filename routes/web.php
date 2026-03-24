<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Buyer\BuyerOrderController;
use App\Http\Controllers\Buyer\BuyerPurchaseController;
use App\Http\Controllers\Buyer\BuyerReviewController;
use Illuminate\Support\Facades\Route;

// ── Public frontend routes ─────────────────────────────────────────────
Route::get('/', fn() => view('frontend.pages.home'))->name('home');
Route::get('/marketplace', [App\Http\Controllers\MarketplaceController::class, 'index'])->name('marketplace');

// Route::get('/news', fn() => view('frontend.pages.news'))->name('news');
Route::get('/news', [App\Http\Controllers\NewsController::class, 'index'])->name('news');
// Route::get('/news/{id}', [NewsController::class, 'show'])->name('news.show');
// Route::get('/map_location', fn() => view('frontend.pages.map_location'))->name('map_location');

Route::get('/map_location', [App\Http\Controllers\MapController::class, 'index'])->name('map_location');
Route::get('/loan_calculator', fn() => view('frontend.pages.loan_calculator'))->name('loan_calculator');
Route::get('/contact', fn() => view('frontend.pages.contact'))->name('contact');
Route::post('/contact', [App\Http\Controllers\ContactMessageController::class, 'store'])->name('contact.store');
Route::get('/compare_cars', fn() => view('frontend.pages.compare_cars'))->name('compare_cars');

// Static frontend auth pages
Route::get('/login', fn() => view('frontend.auth.login'))->name('user-login');
Route::get('/registration', fn() => view('frontend.auth.registration'))->name('user-registration');

// ── Dashboard — smart redirect based on role ───────────────────────────
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
    return view('dashboard');
})
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

// ── BUYER routes ───────────────────────────────────────────────────────
Route::middleware(['auth', 'role:buyer'])
    ->prefix('buyer')
    ->name('buyer.')
    ->group(function () {
        // Dashboard
        Route::get('/dashboard', fn() => view('dashboard.buyer', ['user' => auth()->user()]))->name('dashboard');

        // Orders
        Route::get('/orders', [BuyerOrderController::class, 'index'])->name('orders.index');
        Route::post('/orders', [BuyerOrderController::class, 'store'])->name('orders.store');
        Route::get('/orders/{order}', [BuyerOrderController::class, 'show'])->name('orders.show');
        Route::patch('/orders/{order}/cancel', [BuyerOrderController::class, 'cancel'])->name('orders.cancel');

        // Purchases
        Route::get('/purchases', [BuyerPurchaseController::class, 'index'])->name('purchases.index');
        Route::get('/purchases/{order}/pay', [BuyerPurchaseController::class, 'create'])->name('purchases.create');
        Route::post('/purchases/{order}/pay', [BuyerPurchaseController::class, 'store'])->name('purchases.store');

        // Reviews
        Route::get('/reviews', [BuyerReviewController::class, 'index'])->name('reviews.index');
        Route::get('/reviews/create/{car}', [BuyerReviewController::class, 'create'])->name('reviews.create');
        Route::post('/reviews', [BuyerReviewController::class, 'store'])->name('reviews.store');
        Route::get('/reviews/{review}/edit', [BuyerReviewController::class, 'edit'])->name('reviews.edit');
        Route::patch('/reviews/{review}', [BuyerReviewController::class, 'update'])->name('reviews.update');
        Route::delete('/reviews/{review}', [BuyerReviewController::class, 'destroy'])->name('reviews.destroy');
    });

// ── SELLER routes ──────────────────────────────────────────────────────
Route::middleware(['auth', 'role:seller'])
    ->prefix('seller')
    ->name('seller.')
    ->group(function () {

        // Dashboard
        Route::get('/dashboard', fn() => view('dashboard.seller', ['user' => auth()->user()]))->name('dashboard');

        // Car listings (CRUD)
        Route::get('/cars',                [App\Http\Controllers\Seller\SellerCarController::class, 'index'])->name('cars.index');
        Route::get('/cars/create',         [App\Http\Controllers\Seller\SellerCarController::class, 'create'])->name('cars.create');
        Route::post('/cars',               [App\Http\Controllers\Seller\SellerCarController::class, 'store'])->name('cars.store');
        Route::get('/cars/{car}/edit',     [App\Http\Controllers\Seller\SellerCarController::class, 'edit'])->name('cars.edit');
        Route::patch('/cars/{car}',        [App\Http\Controllers\Seller\SellerCarController::class, 'update'])->name('cars.update');
        Route::delete('/cars/{car}',       [App\Http\Controllers\Seller\SellerCarController::class, 'destroy'])->name('cars.destroy');

        // Orders on seller's listings
        Route::get('/orders',                      [App\Http\Controllers\Seller\SellerOrderController::class, 'index'])->name('orders.index');
        Route::get('/orders/{order}',              [App\Http\Controllers\Seller\SellerOrderController::class, 'show'])->name('orders.show');
        Route::patch('/orders/{order}/confirm',    [App\Http\Controllers\Seller\SellerOrderController::class, 'confirm'])->name('orders.confirm');
        Route::patch('/orders/{order}/cancel',     [App\Http\Controllers\Seller\SellerOrderController::class, 'cancel'])->name('orders.cancel');
    });
// ── BUSINESS routes ────────────────────────────────────────────────────
Route::middleware(['auth', 'role:business'])
    ->prefix('business')
    ->name('business.')
    ->group(function () {
        Route::get('/dashboard', fn() => view('dashboard.business', ['user' => auth()->user()]))->name('dashboard');
    });

// ── Profile ────────────────────────────────────────────────────────────
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
