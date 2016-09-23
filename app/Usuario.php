<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table = 'usuario';

    // Declarando relação
    public function perfil(){
    	return $this->hasOne('App\Perfil','id');
    }
}
