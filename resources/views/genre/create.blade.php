@extends('layouts.app')

@section('content')
<div class="main-wel">
    <form action="/g" enctype="multipart/form-data" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="row ">
            <a class="btn btn-primary" href="{{ url('/profile/'. auth()->user()->id) }}">Back</a>
        </div>
        <div class="row edit-h">
            <h1>
                Add New Genre
            </h1>
        </div>
        <div class="form-group{{ $errors->has('genre') ? ' has-error' : '' }}">

            <label for="genre" class="col-md-4 control-label">New Genre</label>

            <div class="col-md-6">
                <input id="genre"
                       type="text"
                       class="form-control"
                       name="genre"
                       value="{{ old('genre') }}"
                       autocomplete="genre" autofocus>

                @if ($errors->has('genre'))
                    <span class="help-block">
                            <strong>{{ $errors->first('genre') }}</strong>
                        </span>
                @endif
            </div>
        </div>
        <br>
        <div class="genre-main">
            <div>
                <button class="btn btn-primary">Add new genre</button>
            </div>
        </div>
    </form>
</div>
@endsection
