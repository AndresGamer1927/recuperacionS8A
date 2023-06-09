<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Conocido extends Authenticatable
{
    use HasFactory;
    protected $fillable = ['nombre', 'usuario', 'clave'];

    //muchos a muchos con Contactos
    public function contactos()
    {
        return $this->hasMany('App\Models\Conocido');
    }
}
