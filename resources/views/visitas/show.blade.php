
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
                  

              </div>

                <div class="content m-b-md">

                    Estás viendo una película

                </div>


        </body>
    </html>
