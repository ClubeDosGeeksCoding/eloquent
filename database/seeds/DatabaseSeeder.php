<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Inserindo Perfis
        $perfil = \App\Perfil::create(['nome' => "Administrador"]);
        $perfil2 = \App\Perfil::create(['nome' => "Autor"]);

        // Inserindo usuários
        $usuario1 = \App\Usuario::create([
            'nome' => str_random(10),
            'perfil_id'=>$perfil->id
        ]);
        $usuario2 = \App\Usuario::create([
            'nome' => str_random(10),
            'perfil_id'=>$perfil->id
        ]);
        $usuario3 = \App\Usuario::create([
            'nome' => str_random(10),
            'perfil_id'=>$perfil2->id
        ]);
    	
    }
}
