
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



                <div class="content m-b-md">

                  <h1>Movies</h1>
                      @if(count($movies) > 0)
                          @foreach($movies as $movie)
                              <div class="well">
                                  <div class="row">
                                      <div class="col-md-8 col-sm-8">
                                          <h3><a href="/movies/{{$movie->id}}">{{$movie->titulo}}</a></h3>
                                          <small>Calificación {{$movie->calificacion}}</small>
                                          <hr>
                                      </div>
                                  </div>
                              </div>
                          @endforeach
                      @else
                          <p>No movies found</p>
                      @endif



                </div>


        </body>
    </html>
