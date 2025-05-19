<?php

use App\Http\Controllers\NadelenController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\VoordelenController;
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

Route::resource('nadelen', NadelenController::class);

Route::get('/voordelen', [VoordelenController::class, 'index'])->name("voordelen.index");
Route::get('/voordelen/create', [VoordelenController::class, 'create'])->name("voordelen.create");
Route::post('/voordelen/create', [VoordelenController::class, 'create'])->name("voordelen.create");

require __DIR__.'/auth.php';
