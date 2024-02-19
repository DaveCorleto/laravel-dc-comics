<?php

use Illuminate\Support\Facades\Route;
// Importo il COntroller CartoonController 
use App\Http\Controllers\Guest\CartoonController;

// Index:

Route::get('/', [CartoonController::class, 'index']) ->name('comic.index');

// Create: 

Route::get('/comics/create', [CartoonController::class, 'create'])->name('comic.create');

// Show: 

Route::get('/comics/{id}', [CartoonController::class, 'show'])->name('comic.show');

// Edit: 

Route::get('/comics/{id}', [CartoonController::class, 'edit'])->name('comic.edit');

// Store: 

Route::post('/comics', [CartoonController::class, 'store'])->name('comic.store');

// Update: 

Route::put('/comics', [CartoonController::class, 'update'])->name('comic.update');

// Destroy: 

Route::delete('/comics/{id}', [CartoonController::class, 'destroy'])->name('comic.destroy');
