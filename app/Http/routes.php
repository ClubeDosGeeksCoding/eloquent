<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/perfis',function(){
	return \App\Perfil::with('usuarios')->get();
});

Route::get('/perfil/{id_perfil}',function($id_perfil){
	return \App\Perfil::with('usuarios')->get()->find($id_perfil);
});

Route::get('/usuarios',function(){
	return \App\Usuario::with('perfil')->get();
});

Route::get('/usuario/{id_usuario}',function($id_usuario){
	return \App\Usuario::with('perfil')->get()->find($id_usuario);
});
