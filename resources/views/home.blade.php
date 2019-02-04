@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Bienvenida {{ $data['request']->session()->get('nombre')}}, tu plan es {{ $data['request']->session()->get('plan')}} </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="card">

                      <h1 class="card-header">Calificaciones otorgadas: </h1>

                          @if(count($data['visitas']) > 0)
                              @foreach($data['visitas'] as $visita)
                                  <div class="well">
                                      <div class="row">
                                          <div class="col-md-8 col-sm-8">
                                              <h3><a href="/movies/{{$visita->id}}">{{$visita->titulo}}</a></h3>

                                              @if ($visita->calificacion!=NULL)
                                                <small>Calificación: {{$visita->calificacion}}</small>
                                              @else
                                                <small>La película no ha sido calificada todavía</small>
                                              @endif
                                              <hr>
                                          </div>
                                      </div>
                                  </div>
                              @endforeach
                          @else
                              <p>No ha calificado peliculas todavia</p>
                          @endif



                    </div>


                    @if (Auth::user()->isAdmin==1)
                    <p>You are logged in as administrator</a></p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
