<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $movies = Movie::all();
        return view('pages.moviesView.index', compact('movies'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('pages.moviesView.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'=> 'required|max:255',
            'plot' => 'required|max:8000',
            'thumb' => 'required|max:255',
            'original_lenguage' => 'required|max:255',
            'vote' => 'required|max:10',
            'director' => 'required|max:255',
            'year' => 'required|max:255|regex:/^\d{4}$/,',
        ]);

        $formData = $request->All();
        $newMovie= new Movie();
        $newMovie->fill($formData);
        $newMovie->save();
        $movies= Movie::all();
        return view('pages.moviesView.index', compact('movies'));

    }

    /**
     * Display the specified resource.
     */
    public function show(Movie $movie)
    {
        $movies = Movie::all();
        return view('pages.moviesView.show', compact('movies'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Movie $movie)
    {
        return view('moviesView.edit', compact('movie'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Movie $movie)
    {
        $movie->update($request->validate(
            [
                'title' => 'required|max:255',
                'plot' => 'required|max:8000',
                'thumb' => 'required|max:255',
                'original_lenguage' => 'required|max:255',
                'vote' => 'required|max:10',
                'director' => 'required|max:255',
                'year' => 'required|max:255|regex:/^\d{4}$/,',
            ]
        ));

        return redirect()->route('movies.show', $movie);
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Movie $movie)
    {
        $movie->delete();
        return redirect()->route('movies.index');
    }
}
