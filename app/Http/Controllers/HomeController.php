<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\DB;


use App\Movie;
use App\Visita;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
      if (Auth::check()){

        $request->session()->put('nombre',Auth::user()->nombre);
        $request->session()->put('plan',Auth::user()->plan);
        $visitas = DB::table('visitas')
                   ->join('movies', 'visitas.movie_id', '=', 'movies.id')
                  ->select(DB::raw('movies.id as id, movies.titulo as titulo, avg(calificacion) as calificacion'))
                  ->where('user_id',Auth::user()->id)
                  ->groupBy('id')->get();


        $data = [
            'visitas' => $visitas,
            'request'=>$request,
        ];

        return view('home')->with('data', $data);
      }
    }


    public function findMovies(){



    }
}
