<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GenreController extends Controller
{
    public function create()
    {
        return view('genre.create');
    }
    public function store(Request $request)
    {
        /*

        return redirect('/profile/'. auth()->user()->id);
        return redirect('/genre);
        */
        $this->validate($request, [
            'genre' => 'required',
        ]);

        $apt = new \App\Genre;
        $apt->genre = $request->input('genre');
        $apt->save();

        return redirect('/genres');
    }
    public function GenreList()
    {
        $genres = \App\Genre::all();
        $users = \App\Post::all();

        return view('/genres', compact(['genres','users']));
    }
}
