<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function vista_usuario()
    {



        return view('usuario.usuario');
    }
}
