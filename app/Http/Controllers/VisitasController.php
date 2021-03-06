<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Movie;
use App\Visita;


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

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $visita = new Visita;
        $visita->user_id = $request->user_id;
        $visita->movie_id = $request->movie_id;
        $visita->visitas = 1;
        $visita->calificacion = null;
        $visita->save();
    }

    public function visitas($id_user, $id_movie)
    {
        $visitas = DB::table('visitas')
             ->where('movie_id',$id_movie)
             ->where('user_id',$id_user)->get();

        $request = request();

        $movie = Movie::find($id_movie);

        if(json_decode($visitas, true)){

            $this->update($request,$visitas[0]->id);

        }
        else{
            
            $request->request->add(['user_id' => $id_user]);
            $request->request->add(['movie_id' => $id_movie]);

            $this->store($request);
        }

        $visita = Visita::where('movie_id', $id_movie)->where('user_id',$id_user)->first();

        $data = [
            'movie' => $movie,
            'visita' => $visita
        ];

        return view('visitas.show')->with('data',$data);
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
        $visita = Visita::find($id);
        if($request->input('calificacion') != null){
            $visita->calificacion = $request->input('calificacion');
            $visita->save();

            return view('welcome');
        }
        else{
            $visita->visitas = $visita->visitas+1;
            $visita->save();
        }

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
