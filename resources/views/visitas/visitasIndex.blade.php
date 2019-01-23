@extends('layouts.app')

@section('content')
              <div class="hidden">

                {{$visits = $data['visitas']}}

            </div>


            <div class="content m-b-md">

              <h2>TOP 10</h2>

                  @if(count($visits) > 0)
                      @foreach($visits as $visit)
                          <div class="well">
                              <div class="row">
                                  <div class="movie col-md-8 col-sm-8">
                                      <h3>{{$visit->pelicula}}</h3>
                                      <small>Visitas: {{$visit->visits}}</small>
                                      <hr>
                                  </div>
                              </div>
                          </div>
                      @endforeach
                  @else
                      <p>:( No tenemos películas disponibles)</p>
                @endif
            </div>

  @endsection
