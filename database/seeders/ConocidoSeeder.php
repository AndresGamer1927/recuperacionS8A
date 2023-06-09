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
        $conocido = new Conocido();
        //Seeders de Conocidos de la base de datos
        $conocido->nombre = 'Andres';
        $conocido->usuario = 'AndresGamer';
        $conocido->clave = bcrypt('andres123');
        $conocido->save();
        $conocido = new Conocido();

        $conocido->nombre = 'Witron';
        $conocido->usuario = 'witron19';
        $conocido->clave = bcrypt('witron123');
        $conocido->save();
        $conocido = new Conocido();

        $conocido->nombre = 'Raul';
        $conocido->usuario = 'raul27';
        $conocido->clave = bcrypt('raul123');
        $conocido->save();
    }
}
