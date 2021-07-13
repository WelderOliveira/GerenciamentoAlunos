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

    public function alunoNotas($id)
    {
        $alunos = Aluno::with('notas')->findOrFail($id);
        return view('aluno.index',['alunos' => $alunos]);
    }

    public function listarAlunos()
    {
        $alunos = aluno::get();
//        dd($alunos);
        return view('aluno.index', ['alunos' => $alunos]);
    }

    public function adicionarNota()
    {
        return "NADA AINDA";
    }

    public function visualizarNota()
    {
        return "Nada Ainda";
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
        return redirect('alunos');
    }
}
