<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Movie;
use App\Visitas;

class MoviesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $visitas = DB::table('visitas')
            ->join('movies', 'visitas.movie_id', '=', 'movies.id')
           ->select(DB::raw('movies.id as id, movies.titulo as titulo, avg(calificacion) as calificacion'))
           ->groupBy('id')->get();


        return view('movies.moviesIndex')->with('visitas', $visitas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $movie = new Movie;
        $movie->titulo = $request->input('titulo');
        $movie->director = $request->input('director');
        $movie->reparto = $request->input('reparto');
        $movie->plan = $request->input('plan');
        $movie->calificacion = $request->input('calificacion');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        

        $visitas = DB::table('visitas')
              ->join('movies', 'visitas.movie_id', '=', 'movies.id')
             ->select(DB::raw('movies.id, movies.titulo as pelicula, avg(calificacion) as calificacion'))
             ->where('movies.id',$request->id)
             ->groupBy('movies.id')->get();

        $movie = Movie::find($request->id);

        $data = [
            'movie' => $movie,
            'visitas' => $visitas
        ];
        
        return view('movies.show')->with('data', $data);
    }






            /*

            $visitas = DB::table('visitas')
              ->join('movies', 'visitas.movie_id', '=', 'movies.id')
             ->where('visitas.id',1)->get();



            $visitas = DB::table('visitas')
              ->join('movies', 'visitas.movie_id', '=', 'movies.id')
             ->select(DB::raw('movies.titulo as pelicula, avg(calificacion) as calificacion'))
             ->where('movies.id',$id)
             ->groupBy('pelicula')->get();

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
