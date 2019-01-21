<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class CookieController extends Controller {

   public function setCookie(Request $request) {
      $minutes = 1;
      $response = new Response('Este response tendra adjunta una cookie :)');
      $response->withCookie(cookie('cookiepls', 'Yo soy la cookie que durará 1 minuto ((*))', $minutes));
      return $response;
   }
   public function getCookie(Request $request) {
      $value = $request->cookie('cookiepls');
      echo $value;
   }
}
