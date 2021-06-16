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
        $data = request()->validate([
            'caption' => 'required',
            'image' => 'required',
        ]);

        $data = [
            'caption',
            'image'
        ];
        $imagePath = request('image')->store('uploads','public');

        auth()->user()->posts()->create([
            'caption'=> $data['caption'],
            'image'=> $imagePath,
        ]);
        dd(request()->all());
        return redirect('/profile/'. auth()->user()->id);
        */
        $this->validate($request, [
            'caption' => 'required',
            'image' => 'required',
            'title' => 'required',
            'price' => 'required',

        ]);

        $imagePath = request('image')->store('uploads','public');

        $apt = new \App\Post;
        $apt->user_id = auth()->user()->id;
        $apt->caption = $request->input('caption');
        $apt->image = $imagePath;
        $apt->title = $request->input('title');
        $apt->price = $request->input('price');
        $apt->save();

        return redirect('/profile/'. auth()->user()->id);
    }
    public function show(\App\Post $post)
    {
        return view('posts.show',[
            'post'=>$post,
        ]);
    }

    public function destroy($post){
        /*
        Post::destroy($post);

        Post::flash('message', 'Delete successfully!');
        Post::flash('alert-class', 'alert-success');


        return redirect()->route('/profile/'. auth()->user()->id);

        dd($post);
        $user = auth()->user();
        $user->post->delete();
        */
        \App\Post::where('id', $post)->delete();

        return redirect('/profile/'. auth()->user()->id);
    }
}
