<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->has('search') && !empty($request->search)) {
            $keyword = $request->search;
            $movies = Movie::where('title', 'like', "%$keyword%")->paginate(10);

            if ($movies->isEmpty()) {
                return view('admin.movie.index', [
                    'movies' => $movies,
                    'notFoundMessage' => 'No movies found'
                ]);
            }

            return view('admin.movie.index', compact('movies'));
        }

        $movies = Movie::orderByDesc('id')->paginate(10);
        return view('admin.movie.index', compact('movies'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $genres = Genre::all();
        return view('admin.movie.create', compact('genres'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->except('poster');

        if ($request->hasFile('poster')) {
            $file = $request->file('poster');
            $fileName = time() . '_' .  $file->getClientOriginalName();
            $file->storeAs('public/uploads', $fileName);
            $data['poster'] = $fileName;
        }

        if (Movie::create($data)) {
            return redirect()->route('movie.index')->with('success', 'Movie created successfully');
        } else {
            return redirect()->route('movie.index')->with('error', 'Movie failed to create');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Movie $movie)
    {
        $genre = Genre::find($movie->genre_id);
        return view('admin.movie.detail', compact('movie', 'genre'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Movie $movie)
    {
        $genres = Genre::all();
        return view('admin.movie.edit', compact('movie', 'genres'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Movie $movie)
    {
        $data = $request->except('poster');

        $oldPoster = $movie->poster;

        // Check if poster is changed
        if ($request->hasFile('poster')) {
            $file = $request->file('poster');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->storeAs('public/uploads', $fileName);
            $data['poster'] = $fileName;
        } else {
            $data['poster'] = $oldPoster;
        }

        // Update movie data
        if ($movie->update($data)) {
            return redirect()->route('movie.edit', $movie)->with('success', 'Update successfully');
        }
        return redirect()->route('movie.edit', $movie)->with('error', 'Update failed');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Movie $movie)
    {
        if ($movie->delete()) {
            return redirect()->route('movie.index')->with('success', 'Delete successfully');
        }

        return redirect()->route('movie.index')->with('error', 'Delete failed');
    }
}
