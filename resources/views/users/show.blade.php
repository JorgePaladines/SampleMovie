  <?php use App\Http\Controllers\VisitasController;?>

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

                  {{$user = $data['user']}}
                  {{$movies = $data['movies']}}

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



                <h3>Select a movie to watch</h3>

                    @if(count($movies) > 0)
                        @foreach($movies as $movie)
                            <div class="well">
                                <div class="row">
                                    <div class="col-md-8 col-sm-8">
                                      {{VisitasController::ver($movie->id)}}
                                        <a href="href="{{ route('visitas.ver', $movie->id) }}">{{$movie->titulo}}</a>
                                        <small>Written on {{$movie->created_at}}</small>
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
