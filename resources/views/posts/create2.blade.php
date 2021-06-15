@extends('layouts.app')

@section('content')
<div class="main-wel">
    <form action="/p" enctype="multipart/form-data" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <br>
            <br>
            <br>
            <div class="row">
                <h1>
                    Add New game
                </h1>
            </div>
            <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">

                <label for="title" class="col-md-4 control-label">Game Title</label>

                <div class="col-md-6">
                    <input id="title"
                           type="text"
                           class="form-control"
                           name="title"
                           value="{{ old('title') }}"
                           autocomplete="title" autofocus>

                    @if ($errors->has('title'))
                        <span class="help-block">
                            <strong>{{ $errors->first('title') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <br>
            <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
                <label for="title" class="col-md-1 control-label">Main Image</label>

                <input type="file" class="form-control" id="image" name="image">
                @if ($errors->has('image'))

                            <strong>{{ $errors->first('image') }}</strong>

                @endif
            </div>

            <br>
            <div class="form-group{{ $errors->has('nb_of_pl') ? ' has-error' : '' }}">
                <label for="nb_of_pl" class="col-md-4 control-label">Number of players</label>

                <div class="col-md-6">
                    <input id="nb_of_pl" type="nb_of_pl" class="form-control" name="nb_of_pl" value="{{ old('nb_of_pl') }}" required>

                    @if ($errors->has('nb_of_pl'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('nb_of_pl') }}</strong>
                                    </span>
                    @endif
                </div>
            </div>
            <br>
            <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                <label for="description" class="col-md-4 control-label">Description</label>

                <div class="col-md-6">
                    <input id="description" type="description" class="form-control" name="description" value="{{ old('description') }}" required>

                    @if ($errors->has('description'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                    @endif
                </div>
            </div>
            <br>
            <div class="form-group{{ $errors->has('price') ? ' has-error' : '' }}">
                <label for="price" class="col-md-4 control-label">Price</label>

                <div class="col-md-6">
                    <input id="price" type="price" class="form-control" name="price" value="{{ old('price') }}" required>

                    @if ($errors->has('price'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('price') }}</strong>
                                    </span>
                    @endif
                </div>
            </div>
            <br>
            <br>
            <div class="row ">
                <button class="btn btn-primary">Add new game</button>
            </div>

    </form>
</div>
@endsection
