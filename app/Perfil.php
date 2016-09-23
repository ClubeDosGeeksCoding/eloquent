<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Perfil extends Model
{
    protected $table = 'perfil';

    // Aqui está o relacionamento esntre perfil e usuario
    public function usuarios(){
    	return $this->hasMany('App\Usuario');
    }
}
