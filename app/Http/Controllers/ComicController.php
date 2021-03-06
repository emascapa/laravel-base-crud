<?php

namespace App\Http\Controllers;

use App\Comic;
use App\Http\Requests\ComicRequest;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $comics = Comic::all();

        return view('comics.index', compact('comics'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  App\Http\Requests\ComicRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ComicRequest $request)
    {
        //Inserisco un controllo validazione per loggare poi a schermo gli eventuali errori
/*         $request->validate([
            'title' => 'required|max:255',
            'description' => 'nullable',
            'thumb' => 'required',
            'price' => 'required',
            'series' => 'nullable',
            'sale_date' => 'nullable',
            'type' => 'required|max:255'
        ]); */

        //esperimento validation tramite ComicRequest
        $data = $request->validated();



        $data = $request->all();
        Comic::create($data);

        return redirect()->route('comics.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        //
        
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        //
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  App\Http\Requests\ComicRequest  $request
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function update(ComicRequest $request, Comic $comic)
    {
        //
/*         $request->validate([
            'title' => 'required|max:255',
            'description' => 'nullable',
            'thumb' => 'required',
            'price' => 'required',
            'series' => 'nullable',
            'sale_date' => 'nullable',
            'type' => 'required|max:255'
        ]); */

        //esperimento validation tramite ComicRequest
        $data = $request->validated();



        $data = $request->all();
        $comic->update($data);

        return redirect()->route('comics.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        //
        $comic->delete();

        return redirect()->route('comics.index');
    }
}
