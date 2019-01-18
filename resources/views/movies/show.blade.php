    <!doctype html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">

            <title>SampleMovie</title>

            <!-- Fonts -->
            <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

            <!-- Styles -->
            <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">

        </head>
        <body>

                <div class="content">
                    <div class="title m-b-md">
                        SampleMovies
                    </div>
                    <div class="motto m-b-md">
                        Movies and Ratings
                    </div>

                    <div class="links">

                        <a href="{{ route('movies.index') }}">Movies</a>
                        <a href="{{ route('visitas.index') }}">Top 10</a>
                    </div>
                </div>

                <div class="hidden">
                    
                    {{$visitas = $data['visitas']}}
                    {{$movie = $data['movie']}}

                    <?php
                    if(Auth::user() != null){
                        $info = [
                            'id_user' => Auth::user()->id,
                            'id_movie' => $movie->id
                        ];
                    }
                    else{

                        $info = [
                            'id_user' => null,
                            'id_movie' => $movie->id
                        ];
                    
                    }

                    ?>
                    
                    {{$info['id_user']}}


              </div>

                <div class="content m-b-md">

                  <h2>{{$movie->titulo}}</h2>
                  <p><span class="subtitle">Director: </span>{{$movie->director}} <p>
                  <p><span class="subtitle">Reparto: </span>{{$movie->reparto}}</p>
                  <p><span class="subtitle">Tipo de plan: </span>{{$movie->plan}}</p>
                  <p><span class="subtitle">Calificación: </span>{{$visitas[0]->calificacion}}</p>

                  <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <p class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle"
                                href="{!! route('visita', ['id_user'=>$info['id_user'], 'id_movie'=>$info['id_movie']]) !!}"
                                role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    Ver Película <span class="caret"></span>
                                </a>
                            </p>
                        @endguest
                    </ul>

                </div>


        </body>
    </html>
