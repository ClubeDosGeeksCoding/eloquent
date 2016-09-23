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

// Todos os perfis
Route::get('/perfis',function(){
	return \App\Perfil::with('usuarios')->get();
});

// Um perfil específico
Route::get('/perfil/{id_perfil}',function($id_perfil){
	return \App\Perfil::with('usuarios')->get()->find($id_perfil);
});

// Todos os usuários
Route::get('/usuarios',function(){
	return \App\Usuario::with('perfil')->get();
});

// Um usuário específico
Route::get('/usuario/{id_usuario}',function($id_usuario){
	return \App\Usuario::with('perfil')->get()->find($id_usuario);
});
