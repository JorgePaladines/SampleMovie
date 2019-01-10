{{$user = $data['user']}}
{{$movies = $data['movies']}}

<h1>{{$user->nombre}}</h1>
<p>{{$user->fnacimiento}}</p>
<p>{{$user->plan}}</p>
<p>{{$user->cuidad}}</p>
<p>{{$user->pais}}</p>
<p>{{$user->email}}</p>

<h3>Select a movie to watch</h3>

    @if(count($movies) > 0)
        @foreach($movies as $movie)
            <div class="well">
                <div class="row">
                    <div class="col-md-8 col-sm-8">
                    	{!! Form::open(['action' => 'VisitasController@store', 'method' => 'POST']) !!}
    						{{Form::submit($movie->titulo)}}
						{!! Form::close() !!}
                        <small>Written on {{$movie->created_at}}</small>
                    </div>
                </div>
            </div>
        @endforeach
    @else
        <p>No movies found</p>
	@endif