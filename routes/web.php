<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\User;
use App\Http\Resources\User as UserResource;

Route::get('/user/{id_user}', function ($id) {
    return new UserResource(User::find($id));
});

Route::get('/', function () {
    return view('welcome');
});

Route::resource('movies', 'MoviesController');
Route::resource('users', 'UsersController');
Route::resource('visitas', 'VisitasController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/visitas/{id_user}/{id_movie}',[
    'uses' => 'VisitasController@visitas',
    'as'   => 'visita'
]);


Route::get('/cookie/set','CookieController@setCookie');
Route::get('/cookie/get','CookieController@getCookie');


Route::get('/profile/{user_id}','UsersController@showProfile');


Route::get('session/get','SessionController@accessSessionData');
Route::get('session/infoUsuario','SessionController@infoUsuario');
Route::get('session/remove','SessionController@deleteSessionData');
