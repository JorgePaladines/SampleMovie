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

              <div class="hidden">

                {{$visits = $data['visitas']}}

            </div>
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

              <h2>TOP 10</h2>

                  @if(count($visits) > 0)
                      @foreach($visits as $visit)
                          <div class="well">
                              <div class="row">
                                  <div class="movie col-md-8 col-sm-8">
                                      <h3>{{$visit->pelicula}}</h3>
                                      <small>Visitas: {{$visit->visits}}</small>
                                      <hr>
                                  </div>
                              </div>
                          </div>
                      @endforeach
                  @else
                      <p>:( No tenemos películas disponibles)</p>
                @endif
            </div>


    </body>
</html>
