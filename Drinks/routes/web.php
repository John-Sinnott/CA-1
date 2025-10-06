<?php

use App\Http\Controllers\DrinkController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

Route::group(["prefix" => "drinks"], function () {
    Route::get("/", [DrinkController::class, "index"])->name("drinks.index");
    Route::get("/{drink}", [DrinkController::class, "show"])->name("drinks.show");
    Route::get("/{drink}/edit", [DrinkController::class, "edit"])->name("drinks.edit");
    Route::get("/create", [DrinkController::class, "edit"])->name("drinks.create");
});

require __DIR__.'/auth.php';
