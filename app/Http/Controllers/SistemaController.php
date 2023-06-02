<?php

namespace App\Http\Controllers;

use App\Models\Conocido;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class SistemaController extends Controller
{
    public function validar(Request $solicitud)
    {
        $usuario = $solicitud->input('usuario');
        $password = $solicitud->input('password');
        $encontrado = Conocido::where('usuario', $usuario)->first();
        if (is_null($encontrado)) {
            echo 'No se encontrado';
        } else {
            $password_bd = $encontrado->clave;
            $conincide = Hash::check($password, $password_bd);
            if ($conincide) {
                Auth::guard('webd')->login($encontrado);
                $_SESSION['AuthGuard'] = 'webd';
                return redirect('/inicio');
            }
        }
    }

    public function ropciones()
    {
        return view('conocidos.index');
    }
}
