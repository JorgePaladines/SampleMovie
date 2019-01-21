<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class SessionController extends Controller {
   public function accessSessionData(Request $request) {
      if($request->session()->has('nombre'))
         echo $request->session()->get('nombre');
      else
         echo 'Sin data en la sesión';
   }
   public function storeSessionData(Request $request) {
      $request->session()->put('nombre','Daniela Montenegro');
      echo "Data añadida a la sesión";
   }
   public function deleteSessionData(Request $request) {
      $request->session()->forget('nombre');
      echo "Data removida de la sesión";
   }
}
