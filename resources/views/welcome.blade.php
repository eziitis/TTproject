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
        <link rel="stylesheet" type="text/css" href="{{ url('/css/barstyle.css') }}" />

    </head>
    <body>
        <div class="">
                <div class="logo1">
                    <div class="log-elem"><img class="log-img" src="/svg/logo.png" alt="game shop logo on a shield" ></div>
                    <div class="log-elem log-text">Game-Supply-Dock</div>
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
                        <a href="{{ url('/') }}">
                           Home
                        </a>
                    </div>
                    <div class="nb-elem">
                        @if (Route::has('login'))
                            @if (Auth::check())
                               <a href="{{ url('/profile/{user}') }}">
                                   Profile
                               </a>
                            @else
                               <a href="{{ url('/login') }}">
                                   Profile
                               </a>
                            @endif
                        @endif
                    </div>
                    <div class="nb-elem">
                        <a href="{{ url('/genres') }}">
                          Genres
                        </a>
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
                            Newest Content this week:
                        </h1>
                    </div>
                </div>
                <div class="main-cont">
                    <div class="main-cont-elem">
                        <div class="main-img">
                            <img class="main-cont-img" src="/svg/game-logos/game-logo1.png" alt="display of a nice box art for the game">
                        </div>
                        <div>Slay The Spyre</div>
                        <div>Fantasy, RPG</div>
                        <div>Price: 65 $</div>
                    </div>
                    <div class="main-cont-elem">
                        <img class="main-cont-img" src="/svg/game-logos/game-logo2.png" alt="display of a nice box art for the game">
                        <div>Slay The Spyre</div>
                        <div>Fantasy, RPG</div>
                        <div>Price: 65 $</div>
                    </div>
                    <div class="main-cont-elem">
                        <img class="main-cont-img" src="/svg/game-logos/game-logo3.png" alt="display of a nice box art for the game">
                        <div>Slay The Spyre</div>
                        <div>Fantasy, RPG</div>
                        <div>Price: 65 $</div>
                    </div>
                    <div class="main-cont-elem">
                        <img class="main-cont-img" src="/svg/game-logos/game-logo4.png" alt="display of a nice box art for the game">
                        <div>Slay The Spyre</div>
                        <div>Fantasy, RPG</div>
                        <div>Price: 65 $</div>
                    </div>
                    <div class="main-cont-elem">
                        <img class="main-cont-img" src="/svg/game-logos/game-logo5.png" alt="display of a nice box art for the game">
                        <div>Slay The Spyre</div>
                        <div>Fantasy, RPG</div>
                        <div>Price: 65 $</div>
                    </div>
                    <div class="main-cont-elem">
                        <img class="main-cont-img" src="/svg/game-logos/game-logo6.png" alt="display of a nice box art for the game">
                        <div>Slay The Spyre</div>
                        <div>Fantasy, RPG</div>
                        <div>Price: 65 $</div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
