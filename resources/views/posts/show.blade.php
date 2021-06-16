@extends('layouts.app')

@section('content')
<div class="main-wel">
    <div>
        <img src="/storage/{{$post->image}}">
    </div>
    <br>
    <div>
        <a href="/p/delete/{{$post->id}}" class="btn btn-sm btn-danger">Delete</a>
    </div>
</div>
@endsection
