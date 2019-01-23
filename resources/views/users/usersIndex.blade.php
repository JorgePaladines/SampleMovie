@extends('layouts.app')

@section('content')


              <div class="content m-b-md">


                <h1>Users</h1>
                    @if(count($users) > 0)
                        @foreach($users as $user)
                            <div class="well">
                                <div class="row">
                                    <div class="col-md-8 col-sm-8">
                                        <h3><a href="/users/{{$user->id}}">{{$user->nombre}}</a></h3>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <p>No users found</p>
                @endif

  @endsection
