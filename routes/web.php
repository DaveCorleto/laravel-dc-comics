<?php

use Illuminate\Support\Facades\Route;
// Importo il COntroller CartoonController 
use App\Http\Controllers\Guest\CartoonController;

// Index:

Route::get('/', [CartoonController::class, 'index']) ->name('comic.index');

// Show: 

Route::get('/comics/{id}', [CartoonController::class, 'show'])->name('comic.show');
