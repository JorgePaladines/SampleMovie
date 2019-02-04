@extends('layouts.app')
                   
@section('content')


                <div class="content m-b-md">

                  <h1>Movies</h1>

                      @if(count($visitas) > 0)
                          @foreach($visitas as $visita)
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
                          <p>No movies found</p>
                      @endif



                </div>


  @endsection
