<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Buyer\BuyerOrderController;
use App\Http\Controllers\Buyer\BuyerPurchaseController;
use App\Http\Controllers\Buyer\BuyerReviewController;
use Illuminate\Support\Facades\Route;

// ── Public frontend routes ─────────────────────────────────────────────
Route::get('/', fn() => view('frontend.pages.home'))->name('home');
Route::get('/marketplace', [App\Http\Controllers\MarketplaceController::class, 'index'])->name('marketplace');
Route::get('/news', fn() => view('frontend.pages.news'))->name('news');
Route::get('/map_location', fn() => view('frontend.pages.map_location'))->name('map_location');
Route::get('/loan_calculator', fn() => view('frontend.pages.loan_calculator'))->name('loan_calculator');
Route::get('/contact', fn() => view('frontend.pages.contact'))->name('contact');
Route::get('/compare_cars', fn() => view('frontend.pages.compare_cars'))->name('compare_cars');

<<<<<<< HEAD
// Static frontend auth pages (your existing UI pages — keep for design reference)
Route::get('/login', fn() => view('frontend.auth.login'))->name('user-login');
Route::get('/registration', fn() => view('frontend.auth.registration'))->name('user-registration');
=======
// Static frontend auth pages
Route::get('/user-login', fn() => view('frontend.auth.login'))->name('user-login');
Route::get('/user-registration', fn() => view('frontend.auth.registration'))->name('user-registration');
>>>>>>> bac0851 (Updated buyers and marketplace)

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
        Route::get('/dashboard', fn() => view('dashboard.seller', ['user' => auth()->user()]))->name('dashboard');
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

<<<<<<< HEAD
Route::get('/debug-permissions', function() {
    $admin = auth()->guard('admin')->user();
    
    if (!$admin) {
        return "NOT LOGGED IN to admin guard";
    }
    
    $output = [];
    $output[] = "=== ADMIN INFO ===";
    $output[] = "ID: " . $admin->id;
    $output[] = "Name: " . $admin->name;
    $output[] = "Email: " . $admin->email;
    $output[] = "";
    
    $output[] = "=== ROLES ===";
    $roles = $admin->getRoleNames();
    $output[] = "Roles: " . ($roles->isEmpty() ? 'NONE' : $roles->implode(', '));
    $output[] = "";
    
    $output[] = "=== PERMISSIONS ===";
    $permissions = $admin->getAllPermissions();
    if ($permissions->isEmpty()) {
        $output[] = "Permissions: NONE";
    } else {
        foreach ($permissions as $perm) {
            $output[] = "- {$perm->name} (guard: {$perm->guard_name})";
        }
    }
    $output[] = "";
    
    $output[] = "=== PERMISSION CHECKS ===";
    $output[] = "hasRole('superadmin'): " . ($admin->hasRole('superadmin') ? 'TRUE' : 'FALSE');
    $output[] = "hasRole('admin'): " . ($admin->hasRole('admin') ? 'TRUE' : 'FALSE');
    $output[] = "can('manage users'): " . ($admin->can('manage users') ? 'TRUE' : 'FALSE');
    $output[] = "hasPermissionTo('manage users'): " . ($admin->hasPermissionTo('manage users') ? 'TRUE' : 'FALSE');
    $output[] = "";
    
    $output[] = "=== GATE CHECKS ===";
    $output[] = "Gate::allows('manage users'): " . (\Illuminate\Support\Facades\Gate::allows('manage users') ? 'TRUE' : 'FALSE');
    $output[] = "";
    
    $output[] = "=== DATABASE CHECK ===";
    $permExists = \Spatie\Permission\Models\Permission::where('name', 'manage users')
        ->where('guard_name', 'admin')
        ->first();
    $output[] = "Permission 'manage users' exists: " . ($permExists ? 'YES (ID: ' . $permExists->id . ')' : 'NO');
    
    $roleExists = \Spatie\Permission\Models\Role::where('name', 'superadmin')
        ->where('guard_name', 'admin')
        ->first();
    $output[] = "Role 'superadmin' exists: " . ($roleExists ? 'YES (ID: ' . $roleExists->id . ')' : 'NO');
    
    if ($roleExists) {
        $rolePerms = $roleExists->permissions->pluck('name');
        $output[] = "Superadmin permissions: " . ($rolePerms->isEmpty() ? 'NONE' : $rolePerms->implode(', '));
    }
    
    return '<pre>' . implode("\n", $output) . '</pre>';
})->middleware('auth:admin');

require __DIR__ . '/auth.php';
=======
require __DIR__ . '/auth.php';
>>>>>>> bac0851 (Updated buyers and marketplace)
