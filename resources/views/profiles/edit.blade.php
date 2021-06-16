@extends('layouts.app')

@section('content')
<div class="main-wel">
    <form action="/profile/{{ $user->id }}}" enctype="multipart/form-data" method="POST">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input name="_method" value="PUT" type="hidden">
        <br>
        <br>
        <div class="row ">
            <a class="btn btn-primary" href="{{ url('/profile/'. auth()->user()->id) }}">Back</a>
        </div>
        <br>
        <br>
        <div class="row edit-h">
            <h1>
                Edit Profile
            </h1>
        </div>
        <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">

            <label for="description" class="col-md-4 control-label">Profile description</label>

            <div class="col-md-6">
                <input id="description"
                       type="text"
                       class="form-control"
                       name="description"
                       value="{{ old('description') ??  $user->profile->description }}"
                       autocomplete="description" autofocus>

                @if ($errors->has('description'))
                    <span class="help-block">
                            <strong>{{ $errors->first('description') }}</strong>
                        </span>
                @endif
            </div>
        </div>

        <br>
            <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }} fill-out file-image ">
                <div>
                    <label for="image" class="col-md-1 control-label fill-elem fill-elem-text">Profile Image</label>
                </div>

                <div>
                    <input type="file" class="form-control fill-elem" id="image" name="image">
                    @if ($errors->has('image'))

                        <strong>{{ $errors->first('image') }}</strong>

                    @endif
                </div>
            </div>
        <br>
        <br>
        <div class="row ">
            <button class="btn btn-primary">Save Profile</button>
        </div>

    </form>
</div>
@endsection
