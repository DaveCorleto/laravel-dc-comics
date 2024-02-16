<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// importo il Model nel COntroller 

use App\Models\Cartoon;

class CartoonController extends Controller
{
    public function index () {
    // associo il model a una variabile...
    $comics = Cartoon :: all();
    return view('pages.index', compact('comics')); 
}
}

