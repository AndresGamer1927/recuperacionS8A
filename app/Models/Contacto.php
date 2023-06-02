<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Contacto extends Authenticatable
{
    use HasFactory;

    //mucho a muchos Conocidos
    public function Conocidos()
    {
        return $this->belongsToMany('App\Models\Contacto');
    }
}
