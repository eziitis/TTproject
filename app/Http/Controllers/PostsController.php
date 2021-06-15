<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function _construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        /*

        $validatedData = $request->validate([
            'title'=> 'required',
            'image'=> ['required','image'],
            'nb_of_pl'=> '',
            'description'=> '',
            'price'=> 'required'
        ]);

        $data = Validator::make(
            request()->all(),
            array(
                'title'=> 'required',
                'image'=> ['required','image'],
                'nb_of_pl'=> '',
                'description'=> '',
                'price'=> 'required'
            )
        );

        protected $fillable = ['title', 'image', 'nb_of_pl','description','price'];

        \App\Games::create($fillable);

        unset($request['_token']);
        auth()->user()->profile()->games()->create(request()->all());


        $imagePath = request('image')->store('uploads','public');


        auth()->user()->profile()->games()->create([
            'title'=> $request['title'],
            'image'=> $imagePath,
            'price'=> $request['price'],
        ]);

        return redirect('/profile/'. auth()->user()->id);

        $data = request()->validate([
            'caption' => 'required',
            'image' => 'required',
        ]);


        $imagePath = request('image')->store('uploads','public');
        auth()->user()->post()->create([
            'caption'=> $request['caption'],
            'image'=> $imagePath,
        ]);
        */
        dd(request()->all());
    }
}
