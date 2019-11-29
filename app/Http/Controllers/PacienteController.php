<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PacienteController extends Controller
{   
   
    public function tela_cadastro(){
        return view('paciente.tela_cadastro', $menu = ['menu' => 3]);
    }

    public function tela_pesquisa(){
        return view('paciente.tela_busca', $menu = ['menu' => 3]);
    }

}
