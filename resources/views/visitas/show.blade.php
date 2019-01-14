
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
                        <a href="{{ route('users.index') }}">Users</a>
                    </div>
                </div>

                <div class="hidden">

                  {{$visitas = $data['visitas']}}
                  {{$movie = $data['movie']}}
                  

              </div>

                <div class="content m-b-md">

                  <h2>{{$movie->titulo}}</h2>
                  <p><span class="subtitle">Director: </span>{{$movie->director}} <p>
                  <p><span class="subtitle">Reparto: </span>{{$movie->reparto}}</p>
                  <p><span class="subtitle">Tipo de plan: </span>{{$movie->plan}}</p>
                  <p><span class="subtitle">Calificación: </span>{{$visitas[0]->calificacion}}</p>



                </div>


        </body>
    </html>
