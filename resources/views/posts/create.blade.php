@extends('layouts.app')

@section('content')
<div class="main-wel">
    <form action="/p" enctype="multipart/form-data" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <br>
            <br>
            <div class="row ">
                <a class="btn btn-primary" href="{{ url('/profile/'. auth()->user()->id) }}">Back</a>
            </div>
            <br>
            <br>
            <div class="row edit-h">
                <h1>
                    Add New game
                </h1>
            </div>
            <div class="form-group{{ $errors->has('caption') ? ' has-error' : '' }}">

                <label for="caption" class="col-md-4 control-label">Game caption</label>

                <div class="col-md-6">
                    <input id="caption"
                           type="text"
                           class="form-control"
                           name="caption"
                           value="{{ old('caption') }}"
                           autocomplete="caption" autofocus>

                    @if ($errors->has('caption'))
                        <span class="help-block">
                            <strong>{{ $errors->first('caption') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <br>
            <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }} form-2 fill-out file-image" >
                <label for="image" class="col-md-1 control-label fill-elem fill-elem-text">Main Image</label>

                <input type="file" class="form-control fill-elem fill-elem" id="image" name="image">
                @if ($errors->has('image'))

                            <strong>{{ $errors->first('image') }}</strong>

                @endif
            </div>

            <br>
            <br>
            <div class="row ">
                <button class="btn btn-primary">Add new game</button>
            </div>

    </form>
</div>
@endsection
