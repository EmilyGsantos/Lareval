<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\cadastrarUsuarioModel;//importar a classe que eu quero utilizar

class cadastrarUsuario extends Controller
{
    //receber o conteudo do banco de dados 
    public function index(){
        $dados = cadastrarUsuarioModel::all(); //all esta recendo os dados que estão no banco de dados que estão presentes na classeUsuario
        
        return view('paginas.cadastrar')->With('dados',$dados); //-> apontando q na pag cad vou substituir pela  a variavel dados

    }//fim do metodo index

    public function store(Request $request) // comando q o larvel entende falando sobre o bd
    {
        //criando as variveis q vão receber o dado antes de lançar no banco
        $nomeUsuario = $request->input('nome');
        $telefoneUsuario = $request->input('telefone');

        //inserir no banco de dados crinado uma varivel que representa minha model
        $model = new cadastrarUsuarioModel();
        $model->nome = $nomeUsuario;
        $model->telefone = $telefoneUsuario;
        $model->save();// armazenar os dados no BD

        //redirecionando para a pagina


        return redirect('/cadastrar');

    }// fim do metodo
}//fim da classe


