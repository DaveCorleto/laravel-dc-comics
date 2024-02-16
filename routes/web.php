<?php

use Illuminate\Support\Facades\Route;
// Importo il COntroller ComicsController 
use App\Http\Controllers\Guest\ComicController;

Route::get('/', [ComicController::class, 'index']);
