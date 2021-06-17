<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExistsController extends Controller
{
    public function create()
    {
        $genres = \App\Genre::all();
        return view('genre.exists',compact('genres'));
    }
    public function store()
    {
        /*dd(request()->all());
        $apt = new \App\Post;
        $apt->user_id = auth()->user()->id;
        $apt->caption = $request->input('caption');
        $apt->image = $imagePath;
        $apt->title = $request->input('title');
        $apt->price = $request->input('price');
        $apt->save();
        */
        dd(request()->all());

    }

}
