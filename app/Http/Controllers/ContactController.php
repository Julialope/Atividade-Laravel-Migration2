<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contato;

class ContactController extends Controller
{
    public function showForm()
    {
        return view('contato'); // Nome da view
    }

    public function store(Request $request)
    {
        // Validação dos dados
        $validatedData = $request->validate([
            'nome' => 'required|max:50',
            'telefone' => 'required|max:14',
            'email' => 'required|email|max:50',
            'motivo_contato' => 'required',
            'mensagem' => 'required',
        ]);

        // Criação do contato
        $contato = Contato::create($validatedData);

        // Passando os dados para a visualização
        return view('contato', ['data' => $validatedData]);
    }
}
