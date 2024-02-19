<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// Mi importo il Model 
use App\Models\Cartoon;

class CartoonController extends Controller
{
    /**
     * Mostra un elenco delle risorse.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Cartoon::all();
        // Ritorniamo la vista con i dati passati come parametro
        return view('pages.comic.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('pages.comic.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request -> all ();
        
        $comic = new Cartoon();

        $comic -> title = $data['title'];
        $comic -> years = $data['years'];
        $comic -> author = $data['author'];
        $comic -> illustrator = $data['illustrator'];
        $comic -> publisher = $data['publisher'];
        $comic -> genre = $data['genre'];
        $comic -> edition_number = $data['edition_number'];
        $comic -> value = $data['value'];

        $comic -> save();
        return redirect () -> route ('comic.show', $comic->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comic = Cartoon:: find($id);
        return view ('pages.comic.show',compact ('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
