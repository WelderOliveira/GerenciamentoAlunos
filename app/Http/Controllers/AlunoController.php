<?php

namespace App\Http\Controllers;

use App\Models\aluno;
use Illuminate\Http\Request;

class AlunoController extends Controller
{

    public function alunos()
    {
        $alunos = Aluno::with('notas')->get();
        return view('aluno.alunoNotas',['alunos' => $alunos]);
    }

    public function listarAlunos()
    {
        $alunos = aluno::get();
        return view('aluno.visualizarAlunos', ['alunos' => $alunos]);
    }

    public function formCadastro()
    {
        return view('aluno.create');
    }

    public function cadastrarAluno(Request $request)
    {
        Aluno::create([
           'nome' => $request->nome,
        ]);
        return redirect('/');
    }
}
