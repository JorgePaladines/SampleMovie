
@extends('layouts.app')

@section('content')


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

  @endsection
