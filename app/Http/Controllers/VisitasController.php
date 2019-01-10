<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VisitasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

      //SELECT count(user_id) as visitas, visitas.movie_id, movies.titulo
      //FROM visitas
      //JOIN movies on movies.id = visitas.movie_id
      //GROUP BY visitas.movie_id
      //ORDER BY visitas DESC

      $visits = DB::table('visitas')
                      ->join('movies', 'visitas.movie_id', '=', 'movies.id')
                     ->select(DB::raw('movies.titulo as pelicula, count(user_id) as visits'))
                     ->groupBy('pelicula')
                     ->orderBy('visits', 'desc')->get();

      $data = [

          'visitas' => $visits
      ];
      return view('visitas.visitasIndex')->with('data', $data);
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
        return view('welcome');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

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
