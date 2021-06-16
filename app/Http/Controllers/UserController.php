<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function ShowUserlist(){


        $users = \App\User::all();

        return view('users', compact('users'));
    }

    public function UserList()
    {
        $users = \App\Post::all();

        return view('welcome', compact('users'));
    }
}
