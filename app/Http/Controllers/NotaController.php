<?php

namespace App\Http\Controllers;

use App\Models\aluno;
use App\Models\nota;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class NotaController extends Controller
{
    public function index($id)
    {
        $aluno = aluno::findOrFail($id);
        return view('aluno.adicionarNota',['aluno'=>$aluno]);
    }

    public function adicionarNota( $id, Request $request)
    {
        $nota = new Nota;
        $nota->aluno = $id;
        $nota->nota = $request->input('nota');
//        dd($nota);
        if ($nota->save()){
            return redirect('/');
        }
    }

    public function visualizarNota($id)
    {
        $nota = aluno::select('id','nome')->with('notas')->findOrFail($id);
//        return response()->json(['notas'=>$nota->notas],200);
        return view('aluno.visualizarNotas',['alunos'=>$nota]);
    }

}
