<?php

namespace Database\Seeders;

use App\Models\Contacto;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContactoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $gerente = new Contacto();
        //Seeders de Contactos de la base de datos
        $gerente->nombre = 'Fabricio';
        $gerente->telefono = '96114578661';
        $gerente->correo = 'agerente@gmail.com';
        $gerente->save();

        $gerente->nombre = 'Alejandro';
        $gerente->telefono = '96132456671';
        $gerente->correo = 'wgerente@gmail.com';
        $gerente->save();

        $gerente->nombre = 'Brenda';
        $gerente->telefono = '9649721371';
        $gerente->correo = 'rgerente@gmail.com';
        $gerente->save();

        $gerente->nombre = 'Jorge';
        $gerente->telefono = '9611721231';
        $gerente->correo = 'agerente@gmail.com';
        $gerente->save();

        $gerente->nombre = 'Maria';
        $gerente->telefono = '9613226671';
        $gerente->correo = 'wgerente@gmail.com';
        $gerente->save();

        $gerente->nombre = 'Carlos';
        $gerente->telefono = '9619721451';
        $gerente->correo = 'rgerente@gmail.com';
        $gerente->save();

        $gerente->nombre = 'Adrian';
        $gerente->telefono = '9611728451';
        $gerente->correo = 'agerente@gmail.com';
        $gerente->save();

        $gerente->nombre = 'Mario';
        $gerente->telefono = '9614528671';
        $gerente->correo = 'wgerente@gmail.com';
        $gerente->save();

        $gerente->nombre = 'Pedro';
        $gerente->telefono = '9619121371';
        $gerente->correo = 'rgerente@gmail.com';
        $gerente->save();
    }
}
