@extends('layouts.app')

@section('content')
<div class="hidden">

     {{$visitas = $data['visitas']}}
     {{$movie = $data['movie']}}

     <?php
     if(Auth::user() != null){
         $info = [
             'id_user' => Auth::user()->id,
             'id_movie' => $movie->id
         ];
     }
     else{
         $info = [
             'id_user' => null,
             'id_movie' => $movie->id
         ];

     }
     ?>

     {{$info['id_user']}}


</div>

 <div class="content m-b-md">

   <h2>{{$movie->titulo}}</h2>
   <p><span class="subtitle">Director: </span>{{$movie->director}} <p>
   <p><span class="subtitle">Reparto: </span>{{$movie->reparto}}</p>
   <p><span class="subtitle">Tipo de plan: </span>{{$movie->plan}}</p>
   <p><span class="subtitle">Calificación: </span>{{$visitas[0]->calificacion}}</p>

   <!-- Right Side Of Navbar -->
     <ul class="navbar-nav ml-auto">
         <!-- Authentication Links -->
         @guest
             <li class="nav-item">
                 <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
             </li>
             @if (Route::has('register'))
                 <li class="nav-item">
                     <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                 </li>
             @endif
         @else
                @if(!strcasecmp(Auth::user()->plan, $movie->plan))
                 <a class="bt_pelicula flex-center"
                 href="{!! route('visita', ['id_user'=>$info['id_user'], 'id_movie'=>$info['id_movie']]) !!}">
                     Ver Película
                 </a>

                 @else

                 <p> Esta película no está incluida en su plan actual</p>
                @endif



         @endguest
     </ul>

 </div>



  @endsection
