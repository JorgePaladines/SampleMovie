@extends('layouts.app')

@section('content')


                <div class="content m-b-md">

                  <h1>Movies</h1>
                      @if(count($movies) > 0)
                          @foreach($movies as $movie)
                              <div class="well">
                                  <div class="row">
                                      <div class="col-md-8 col-sm-8">
                                          <h3><a href="/movies/{{$movie->id}}">{{$movie->titulo}}</a></h3>
                                          <small>Calificación {{$movie->calificacion}}</small>
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
