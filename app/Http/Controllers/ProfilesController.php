<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class ProfilesController extends Controller
{
    public function index($user)
    {
        $user = User::find($user);

        return view('home',[
            'user' => $user,
            ]);
    }
    public function edit($user)
    {
        /*
         * $this->authorize('update',$user->profile);
         * $user = User::find($user);
         */
        $user = auth()->user();

        return view('profiles.edit',[
            'user' => $user,
        ]);

    }

    public function update(Request $request, $user)
    {
        /*
         dd(request()->all());
        $user = User::find($user);
        dd(request('image')->store('profile','public'));
         */


        $user = auth()->user();
        $user->profile->description = request()->input('description');
        $user->push();

        if(request('image')) {
            $imagePath = request('image')->store('profile','public');
            $user = auth()->user();
            $user->profile->description = request()->input('description');
            $user->profile->image = $imagePath;
            $user->push();
        }
        else {
            $user = auth()->user();
            $user->profile->description = request()->input('description');
            $user->push();
        }

        return redirect('/profile/'. auth()->user()->id);
    }
}


