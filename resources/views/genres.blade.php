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
        <link rel="stylesheet" type="text/css" href="{{asset('css/style.css?v=').time()}}">
        <link rel="stylesheet" type="text/css" href="{{asset('css/barstyle.css?v=').time()}}">
        <link rel="stylesheet" type="text/css" href="{{asset('css/profilestyle.css?v=').time()}}">

    </head>
    <body>
        <div class="">
            <div class="logo-cont">
                <div class="logo1">
                    <div class="log-elem"><img class="log-img" src="/svg/logo.png" alt="game shop logo on a shield" ></div>
                    <div class="log-elem log-text">Game-Supply-Dock</div>
                </div>
            </div>
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                    Logout
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                        </form>

                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif

            <div class="main-wel">
                <div class="nav-bar">
                    <div class="nb-elem">
                        <a class="main-but" href="{{ url('/') }}">
                           Home
                        </a>
                    </div>
                    <div class="nb-elem">
                        @if (Route::has('login'))
                            @if (Auth::check())
                               <a class="main-but" href="{{ url('/profile/'. auth()->user()->id) }}">
                                   Profile
                               </a>
                            @else
                               <a class="main-but" href="{{ url('/login') }}">
                                   Profile
                               </a>
                            @endif
                        @endif
                    </div>
                    <div class="nb-elem">
                        <a class="main-but" href="{{ url('/genres') }}">
                            Genres
                        </a>
                    </div>
                    <div class="nb-elem">
                        <a class="main-but" href="{{ url('/users') }}">
                            Users
                        </a>
                    </div>
                    <div class="nb-elem">
                        <a class="main-but" href="{{ url('/g/create') }}">
                            Add new Genre
                        </a>
                    </div>
                </div>
            </div>
            <div class="new-content user-h">
                <div class="button-1">
                    <h1 class="header1">
                        Genres:
                    </h1>
                </div>
            </div>
            <div class="user-cont genre-main">
                <div class="genre-block">
                    @foreach($genres as $genre)
                        <a class="genre-a" href="#"><div class="genre-text">{{$genre->genre}}</div></a>
                    @endforeach
                </div>
                <div>
                    @foreach($users as $post)
                        <div class="main-cont-elem">
                            <div class="main-img">
                                <img class="main-cont-img" src="/storage/{{ $post->image }}" alt="display of a nice box art for the game">
                            </div>
                            <div class="main-cont-text">
                                <div class="main-text italic">{{$post->title}}</div>
                                <div class="main-text italic">Fantasy, RPG</div>
                                <div class="main-text"><span class="bb">Price:</span> <span class="italic">{{$post->price}}</span> $</div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </body>
</html>
