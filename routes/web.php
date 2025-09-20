<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Models\Location;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\CartController;
use App\Http\Controllers\PaymentController;
use Illuminate\Support\Facades\Auth;

// Public Routes
Route::get('/', fn() => view('home'))->name('home');

Route::get('/menu', function (Request $request) {
    $locations = Location::all();
    $selectedLocationId = $request->input('location', 1);

    $categories = Category::with(['menuItems.locationPrices' => fn($q) => $q->where('location_id', $selectedLocationId)])->get();

    return view('menu', compact('locations', 'categories', 'selectedLocationId'));
})->name('menu');

Route::get('/about', fn() => view('about'))->name('about');
Route::get('/reviews', fn() => view('reviews'))->name('reviews');
Route::get('/gallery', fn() => view('gallery'))->name('gallery');
Route::get('/contact', fn() => view('contact'))->name('contact');

// Cart
Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::post('/cart/add', [CartController::class, 'add'])->name('cart.add');
Route::post('/cart/update', [CartController::class, 'update'])->name('cart.update');
Route::post('/cart/remove', [CartController::class, 'remove'])->name('cart.remove');

// Payment
Route::get('/payment/return', [PaymentController::class, 'p24Return'])->name('payment.return');
Route::post('/payment/status', [PaymentController::class, 'p24Status'])->name('payment.status');

// Authenticated Routes
Route::middleware('auth')->group(function () {

    Route::get('/checkout', [CartController::class, 'checkout'])->name('checkout.index');
    Route::post('/checkout/place-order', [CartController::class, 'placeOrder'])->name('checkout.place_order');

    // Profile
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Role-based Admin Panel (Filament)
    Route::get('/admin', function () {
        return redirect()->route('filament.admin.pages.dashboard');
    })->middleware(['role:admin|super_admin|manager'])->name('admin.redirect');
});

// Default dashboard for normal users
Route::get('/dashboard', fn() => view('dashboard'))->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';
