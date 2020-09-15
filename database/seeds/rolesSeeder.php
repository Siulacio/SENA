<?php

use Illuminate\Database\Seeder;
use App\Rol;

class rolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rol = Rol::create(['nombre'=>'Administrador']);
        $rol = Rol::create(['nombre'=>'Instructor Líder']);
        $rol = Rol::create(['nombre'=>'Instructor Transversal']);
        $rol = Rol::create(['nombre'=>'Aprendiz']);
    }
}
