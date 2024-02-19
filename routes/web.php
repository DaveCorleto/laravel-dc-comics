<?php

use Illuminate\Support\Facades\Route;
// Importo il COntroller CartoonController 
use App\Http\Controllers\Guest\CartoonController;



Route::get('/', [CartoonController::class, 'index']);
