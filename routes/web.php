<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\CategoriasController;
use App\Http\Controllers\VentasController;

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

// Asegúrate de que los nombres de los controladores coincidan con los archivos.
Route::resource('productos', ProductoController::class)->middleware('auth');
Route::resource('categorias', CategoriasController::class)->middleware('auth'); // Singular
Route::resource('ventas', VentasController::class)->middleware('auth'); // Singular

require __DIR__.'/auth.php';
