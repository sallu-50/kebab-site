<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Models\Location;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\CartController;
use App\Http\Controllers\PaymentController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/menu', function (Request $request) {
    $locations = Location::all();
    $selectedLocationId = $request->input('location', 1);

    $categories = Category::with(['menuItems.locationPrices' => function ($query) use ($selectedLocationId) {
        $query->where('location_id', $selectedLocationId);
    }])->get();

    return view('menu', compact('locations', 'categories', 'selectedLocationId'));
})->name('menu');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/reviews', function () {
    return view('reviews');
})->name('reviews');

Route::get('/gallery', function () {
    return view('gallery');
})->name('gallery');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::post('/cart/add', [CartController::class, 'add'])->name('cart.add');
Route::post('/cart/update', [CartController::class, 'update'])->name('cart.update');
Route::post('/cart/remove', [CartController::class, 'remove'])->name('cart.remove');

Route::middleware('auth')->group(function () {
    Route::get('/checkout', [CartController::class, 'checkout'])->name('checkout.index');
    Route::post('/checkout/place-order', [CartController::class, 'placeOrder'])->name('checkout.place_order');
});

Route::get('/payment/return', [PaymentController::class, 'p24Return'])->name('payment.return');
Route::post('/payment/status', [PaymentController::class, 'p24Status'])->name('payment.status');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';