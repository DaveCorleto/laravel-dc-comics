<?php

use Illuminate\Support\Facades\Route;
// Importo il COntroller ComicsController 
use App\Http\Controllers\Guest\ComicsController;

Route::get('/', [ComicsController::class, 'index']);
