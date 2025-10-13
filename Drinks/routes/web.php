
<?php
 
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DrinkController;
 
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
Route::get('/drinks/{drink}', [DrinkController::class, 'show'])->name('drinks.show');
Route::post('/drinks', [DrinkController::class, 'store'])->name('drinks.store');
 
Route::get('/drinks/{drink}/edit', [DrinkController::class, 'edit'])->name('drinks.edit');
Route::put('/drinks/{drink}', [DrinkController::class, 'update'])->name('drinks.update');
Route::delete('/drinks/{drink}', [DrinkController::class, 'destroy'])->name('drinks.destroy');
 
 
require __DIR__.'/auth.php';