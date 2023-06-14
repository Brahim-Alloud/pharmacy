<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PharmacieController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

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
    Route::get('/pharmacie/create',[PharmacieController::class,'create'])->name('pharmacie.create');
    Route::post('/pharmacie',[PharmacieController::class,'store'])->name('pharmacie.store');
    Route::get('/pharmacie/{id}/edit',[PharmacieController::class,'edit'])->name('pharmacie.edit');
    Route::delete('/pharmacie/{id}',[PharmacieController::class,'destroy'])->name('pharmacie.destroy');
    Route::put('/pharmacie/{id}',[PharmacieController::class,'update'])->name('pharmacie.update');

});
Route::get('/pharmacie/{id}',[PharmacieController::class,'show'])->name('pharmacie.show');
Route::get('/pharmacie',[PharmacieController::class,'index'])->name('pharmacie.index');

require __DIR__.'/auth.php';
