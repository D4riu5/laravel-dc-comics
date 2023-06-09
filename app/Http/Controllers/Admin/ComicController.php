<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// Models
use App\Models\Comic;

// Helpers
use App\Http\Requests\ComicRequest;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    //  custom function to redirect to comics from LOCALE homepage
    public function welcome()
    {
        return redirect()->route('comics.index');
    }

    public function index()
    {
        $comics = Comic::all();
        $links = config('links');

        return view('comics.index', [
            'comics' => $comics,
            'links' => $links

        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $links = config('links');

        return view('comics.create', [
            'links' => $links
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ComicRequest $request)
    {
        $data = $request->all();
        // dd($data);
        $newComic = new Comic;
        $newComic->title = $data['title'];
        $newComic->thumb = $data['thumb'];
        $newComic->description = $data['description'];
        $newComic->price = $data['price'];
        $newComic->series = $data['series'];
        $newComic->sale_date = $data['sale_date'];
        $newComic->type = $data['type'];
        $newComic->save();

        return redirect()->route('comics.show', $newComic->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comic = Comic::findOrFail($id);
        $links = config('links');

        return view('comics.show', [
            'comic' => $comic,
            'links' => $links
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comic = Comic::findOrFail($id);
        $links = config('links');

        return view('comics.edit', [
            "comic" => $comic,
            'links' => $links
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ComicRequest $request, $id)
    {
        $comic = Comic::findOrFail($id);

        $editData = $request->all();
        // dd($editData);

        $comic->update($editData);
        // dd($comic);

        return redirect()->route('comics.show', $comic->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comic = Comic::findOrFail($id);

        $comic->delete();

        return redirect()->route('comics.index');
    }
}
 