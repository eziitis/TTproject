<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="{{ url('/css/style.css') }}" />

</head>
<body>
<div class="">
    @if (Route::has('login'))
        <div class="top-right links">
            @if (Auth::check())
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ url('/login') }}">Login</a>
                <a href="{{ url('/register') }}">Register</a>
            @endif
        </div>
    @endif

    <div class="main-wel">
        <div class="nav-bar">
            <div class="nb-elem">
                <a href="{{ url('/') }}">
                    Home
                </a>
            </div>
            <div class="nb-elem">
                Genres
            </div>
            <div class="nb-elem">
                Users
            </div>
            <div class="nb-elem">
                Contacts
            </div>
        </div>

        <div class="new-content">
            <div class="button-1">
                <h1>
                    Success!!!!!!!!!!!!!!!!
                </h1>
            </div>

        </div>
    </div>
</div>
</body>
</html>