<?php

use Illuminate\Database\Seeder;

class Perfil extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('perfil')->insert([
    		['nome' => "Administrador"],
    		['nome' => "Autor"]
    	]);
    }
}
