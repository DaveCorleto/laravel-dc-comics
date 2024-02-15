<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// importo il Model nel COntroller 

use App\Models\ComicsModel;

class ComicsController extends Controller
{
    public function index () {
    // associo il model a una variabile...
    $comics = ComicsModel :: all();
    return view('pages.index', compact('comics')); 
}
}

