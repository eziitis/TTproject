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
                    Profile
                </div>
                <div class="nb-elem">
                    Add new content
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
            <div>
                Your content:
            </div>
        </div>
    </div>
</div>
@endsection
