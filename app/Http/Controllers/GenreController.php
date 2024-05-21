<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    public function genre()
    {
        $genres = New Genre();
        $genres = $genres->getAllGenres();

        return view('genre', ['genres' => $genres]);
    }
}
