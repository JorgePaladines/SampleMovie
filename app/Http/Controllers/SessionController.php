<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class SessionController extends Controller {

   public function accessSessionData(Request $request) {
      if($request->session()->has('nombre'))
         echo $request->session()->get('nombre');
      else
         echo 'Sin data en la sesión';
   }
   public function infoUsuario(Request $request) {
      if (Auth::check()){
        
        $request->session()->put('nombre',Auth::user()->nombre);
        $request->session()->put('plan',Auth::user()->plan);

        return view('home');
      }

   }
   public function deleteSessionData(Request $request) {
      $request->session()->forget('nombre');
      echo "Data removida de la sesión";
   }
}
