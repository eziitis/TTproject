@extends('layouts.app')

@section('content')
<div class="main-wel">
    <div class="">
        <div class="nav-bar">
            <div>
                <div class="nb-pic">
                    <img class="profile-img" src="/storage/{{ $user->profile->image }}">
                </div>
                <div class="nb-elem">
                    <a href="{{ url('/') }}">
                        Home
                    </a>
                </div>
                <div class="nb-elem">
                    <a href="/profile/{{$user->id}}/edit">
                        Edit Profile
                    </a>
                </div>
                <div class="nb-elem">
                    <a href="{{ url('/p/create') }}">Add new content</a>
                </div>
            </div>
        </div>
        <br>
        <br>
        <div>
            <div class="bb descri">
                Description:
            </div>
            <div class="home-desc">
                {{$user->profile->description ?? 'N/A'}}
            </div>
        </div>
        <div class="button-1">
            <h1 class="header1">
                Your content:
            </h1>
        </div>
        <div class="main-cont">
        @foreach($user->posts as $post)
            <a href="/p/{{ $post->id}}">
                <div class="main-cont-elem home-elem">
                    <div class="main-img">
                        <img class="main-cont-img" src="/storage/{{ $post->image }}" alt="display of a nice box art for the game">
                    </div>
                    <div class="main-cont-text">
                        <div class="main-text italic">Slay The Spyre</div>
                        <div class="main-text italic">Fantasy, RPG</div>
                        <div class="main-text"><span class="bb">Price:</span> <span class="italic">65</span> $</div>
                    </div>
                </div>
            </a>
        @endforeach
        </div>
    </div>
</div>
@endsection
