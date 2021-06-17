@extends('layouts.app')

@section('content')
<div class="main-wel">
    <form action="/e" enctype="multipart/form-data" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="row genre-back">
            <a class="btn btn-primary" href="{{ url('/profile/'. auth()->user()->id) }}">Back</a>
        </div>
        <div class="row edit-h">
            <h1>
                Add Genre to this game
            </h1>
        </div>
        @foreach($genres as $genre)
            <div class="genre-flex">
                <div class="genre-item">
                    <input type="checkbox"
                           id="genre"
                           name="genre"
                           value="{{ $genre->genre }}"
                           autocomplete="genre" autofocus>
                </div>
                <div class="genre-item genre-item-2">
                    <label for="genre">{{ $genre->genre }}</label><br>
                </div>
            </div>
        @endforeach
        <br>
        <div class="genre-main">
            <div>
                <button class="btn btn-primary">Add genre</button>
            </div>
        </div>
    </form>
</div>
@endsection
