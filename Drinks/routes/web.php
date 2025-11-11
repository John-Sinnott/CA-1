
<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DrinkController;
use App\Http\Controllers\StockController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/drinks', [DrinkController::class, 'index'])->name('drinks.index');
Route::get('/drinks/create', [DrinkController::class, 'create'])->name('drinks.create');
Route::post('/drinks', [DrinkController::class, 'store'])->name('drinks.store');
Route::get('/drinks/{drink}', [DrinkController::class, 'show'])->name('drinks.show');
Route::get('/drinks/{drink}/edit', [DrinkController::class, 'edit'])->name('drinks.edit');
Route::put('/drinks/{drink}', [DrinkController::class, 'update'])->name('drinks.update');
Route::delete('/drinks/{drink}', [DrinkController::class, 'destroy'])->name('drinks.destroy');

//This creates all routes for stocks

//overwrites the usual store route, as to accept a drink paramater.
//this route is designed to takea drink parameter, so it expects drinks/{drink}/stocks in the URL
//the route name 'stocks.store' is what we mention in the view e.g <form action="{{ route('drinks.stocks.store', $drink) }} " .....

Route::resource('stocks', StockController::class)->only(['edit', 'update', 'destroy']);


Route::post('drinks/{drink}/stocks', [StockController::class, 'store'])
    ->name('drinks.stocks.store');

Route::get('drinks/{drink}/stocks/{stock}/edit', [StockController::class, 'edit'])
    ->name('drinks.stocks.edit');

Route::put('drinks/{drink}/stocks/{stock}', [StockController::class, 'update'])
    ->name('drinks.stocks.update');

Route::delete('drinks/{drink}/stocks/{stock}', [StockController::class, 'destroy'])
    ->name('drinks.stocks.destroy');

require __DIR__ . '/auth.php';
