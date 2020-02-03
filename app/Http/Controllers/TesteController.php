<?php

namespace App\Http\Controllers;

use App\Teste; // Refernciando o model
use Illuminate\Http\Request;

class TesteController extends Controller
{
    public function index()
    {
        $postagens = Teste::all();
        return view('teste-site.index', compact('postagens'));
    }

    public function cadastraPostagem(Request $request)
    {
        $cadastro = Teste::create([
            'titulo'    => $request['titulo'],
            'conteudo'  => $request['conteudo']
        ]);

        if($cadastro)
        {
            return redirect()->route('teste-principal');
        }else {
            echo "Falha ao cadastrar";
        }
    }

    public function deletaPostagem($id)
    {
        $postagem = Teste::findOrFail($id);
        $delete = $postagem->delete();

        if($delete)
        {
            return redirect()->route('teste-principal');
        }else {
            echo "Falha ao deletar";
        }
    }
}
