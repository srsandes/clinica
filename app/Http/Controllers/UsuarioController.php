<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function tela_cadastro(){
        return view('usuario.cadastrar', $menu = ['menu' => 4]);
    }
}
