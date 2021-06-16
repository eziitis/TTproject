@extends('layouts.app')

@section('content')
<div class="main-wel">
    <div class="row show-button">
        <a class="btn btn-primary" href="{{ url('/profile/'. auth()->user()->id) }}">Back</a>
    </div>
    <div class="show-flex">
        <div class="show-item">
            <img class="show-img" src="/storage/{{$post->image}}">
        </div>
        <div class="show-item">
            <div>
                <p class="show-text"><span class="show-tit">Title: </span>{{$post->title}}</p>
                <p class="show-text tt2"><span class="show-tit">Captions: </span>{{$post->caption}}</p>
                <p class="show-text tt2"><span class="show-tit">Price: </span>{{$post->price}}</p>
            </div>
        </div>
    </div>
    <br>
    <div>
        <a href="/p/delete/{{$post->id}}" class="btn btn-sm btn-danger del-but">Delete</a>
    </div>
</div>
@endsection
