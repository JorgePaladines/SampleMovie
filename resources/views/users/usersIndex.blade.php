

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



              <div class="content m-b-md">


                <h1>Users</h1>
                    @if(count($users) > 0)
                        @foreach($users as $user)
                            <div class="well">
                                <div class="row">
                                    <div class="col-md-8 col-sm-8">
                                        <h3><a href="/users/{{$user->id}}">{{$user->nombre}}</a></h3>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <p>No users found</p>
                @endif




      </body>
  </html>
