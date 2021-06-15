@extends('layouts.app')

@section('content')
<div class="main-wel">
    <div class="">
        <div class="nav-bar">
            <div>
                <div class="nb-elem">
                    <a href="{{ url('/') }}">
                        Home
                    </a>
                </div>
                <div class="nb-elem">
                    <a href="{{ url('/p/create') }}">Add new content</a>
                </div>
            </div>
        </div>
        <div>
            <div>
                Description:
            </div>
            <div>
                {{$user->profile->description ?? 'N/A'}}
            </div>
        </div>
        <div>
            Your content:
        </div>
        <div class="main-cont">
        @foreach($user->posts as $post)
            <div class="main-cont-elem">
                <div class="main-img">
                    <img class="main-cont-img" src="/storage/{{ $post->image }}" alt="display of a nice box art for the game">
                </div>
                <div>Slay The Spyre</div>
                <div>Fantasy, RPG</div>
                <div>Price: 65 $</div>
            </div>
        @endforeach
        </div>
    </div>
</div>
@endsection
