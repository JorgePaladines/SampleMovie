@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Bienvenid(o/a) {{ $data['request']->session()->get('nombre')}}, tu plan es {{ $data['request']->session()->get('plan')}} </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="card">

                      <p class="card-header">Calificaciones otorgadas: </p>

                          @if(count($data['visitas']) > 0)
                              @foreach($data['visitas'] as $visita)
                                  <div class="well">
                                      <div class="row">
                                          <div class="col-md-8 col-sm-8">


                                            {!! Form::open(['action' => ['MoviesController@show', $visita->id], 'method' => 'GET', 'enctype' => 'multipart/form-data']) !!}
                                                    {{Form::hidden('id',$visita->id)}}
                                                    {{Form::submit($visita->titulo, ['class'=>'btn btn-primary col-md-12 col-sm-12'])}}

                                            {!! Form::close() !!}


                                              <div>
                                              
                                              </div>




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
