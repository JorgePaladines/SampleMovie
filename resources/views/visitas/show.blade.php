
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

                    {{$visita = $data['visita']}}
                    {{$movie = $data['movie']}}


              </div>

                <div class="content m-b-md">

                    <h1 class="center">{{$movie->titulo}}</h1>
                    <h5>CALIFICACIÓN</h5>
                    {!! Form::open(['action' => ['VisitasController@update', $visita->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                            {{Form::text('calificacion', $visita->calificacion, ['class' => 'form-control', 'placeholder' => 'Calificacion'])}}
                            {{Form::hidden('_method','PUT')}}
                            {{Form::submit('Rate', ['class'=>'btn btn-primary'])}}
                    {!! Form::close() !!}

                </div>
        </body>
    </html>
