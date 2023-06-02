<?php

namespace Database\Seeders;

use App\Models\Conocido;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ConocidoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $gerente = new Conocido();
        //Seeders de Conocidos de la base de datos
        $gerente->nombre = 'Andres';
        $gerente->usuario = 'AndresGamer';
        $gerente->clave = bcrypt('andres123');
        $gerente->save();

        $gerente->nombre = 'Witron';
        $gerente->nombre_usuario = 'witron19';
        $gerente->clave = bcrypt('witron123');
        $gerente->save();

        $gerente->nombre = 'Raul';
        $gerente->nombre_usuario = 'raul27';
        $gerente->clave = bcrypt('raul123');
        $gerente->save();
    }
}
