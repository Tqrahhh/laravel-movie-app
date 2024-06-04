<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    public function genre()
    {
        $genres = Genre::all();

        return view('genre', compact('genres'));
    }

    public function create()
    {
        return view('create', );
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
        'name' => 'required',
        'deskription' => 'required',

    ]);

        Genre::create($validatedData);

        return redirect('/genres')->with('success', 'Genre added successfully!');
    }

    public function destroy(Genre $genre)
    {
        $genre->delete();
        return redirect('/genres')->with('success', 'Genre deleted successfully!');
    }
}
