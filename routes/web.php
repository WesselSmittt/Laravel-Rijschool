<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\InstructeurController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VoertuigController;


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
});

Route::resource('instructeurs', InstructeurController::class);

Route::get('/instructeurs', [InstructeurController::class, 'indienst'])->name('instructeurs.indienst');
require __DIR__.'/auth.php';

Route::get('/instructeurs', [InstructeurController::class, 'index'])->name('instructeurs.index');
Route::post('/instructeurs/{id}/toggle-status', [InstructeurController::class, 'toggleStatus'])->name('instructeurs.toggleStatus');

Route::get('/instructeurs/{id}/gebruikte-voertuigen', [InstructeurController::class, 'gebruikteVoertuigen'])
    ->name('instructeurs.gebruikte-voertuigen');
Route::get('/instructeurs/{id}/gebruikte-voertuigen/create', [InstructeurController::class, 'create'])
    ->name('instructeurs.create');

    Route::post('/voertuigen', [InstructeurController::class, 'store'])->name('voertuigen.store');
