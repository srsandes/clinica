<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Consulta; 
use App\Models\Paciente;

class ConsultaController extends Controller
{
    public function tela_cadastro(){
        return view('consulta.cadastrar', $menu = ['menu' => 2]);
        
    }
    
    public function tela_pesquisa(){
        return view('consulta.busca', $menu = ['menu' => 2]);
    }
    
    
    public function cadastrar_consulta(Request $request){
        $request->validate([
            'nome_paciente' => 'required',
            'nome_procedimento' => 'required',
            'valor' => 'required',
            'dt_realizacao' => 'required'            
        ], [
            'required' => 'O campo :attribute é obrigatório!',
        ],[
            'nome_paciente'      => 'Nome do Paciente',
            'nome_procedimento'     => 'Nome do Procedimento',
            'valor'  => 'Valor do Procedimento',
            'dt_realizacao' => 'Data de Realização',
            
            ]);

            $dados = $request->all();
            $dados['dt_realizacao'] =  date('Y-m-d', strtotime(str_replace('/','-',$dados['dt_realizacao'])));
            
            $paciente = Paciente::where('nome', $request->nome_paciente)->get();

            $consulta = new Consulta;
            $consulta->nome = $request->nome_paciente;
            $consulta->procedimento = $request->nome_procedimento;
            $consulta->valor = $request->valor;
            $consulta->dt_realizado = $request->$dados['dt_realizacao'];
            $consulta->paciente_id = $paciente['id'];

            if ($consulta->save()){
                return redirect()->route('cadastro.consulta')->with('sucessful', 's');
            }else{
                return redirect()->route('cadastro.consulta')->with('sucessful', 'n');
            }





    }
    
    
    
    
}
