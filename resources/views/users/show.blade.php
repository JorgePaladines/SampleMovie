@extends('layouts.app')

@section('content')

              <div class="hidden">

                  {{$user = $data['user']}}

              </div>
              <p><span class="subtitle">Nombre: </span>{{$user->nombre}}<p>
              <p><span class="subtitle">Contraseña: </span>{{$user->password}}</p>
              <p><span class="subtitle">Email: </span>{{$user->email}}</p>
              <p><span class="subtitle">Token: </span>{{$user->remember_token}}</p>


@endsection
