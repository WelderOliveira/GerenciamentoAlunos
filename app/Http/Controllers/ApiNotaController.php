<?php

namespace App\Http\Controllers;

use App\Models\aluno;
use App\Models\nota;
use Illuminate\Http\Request;

class ApiNotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nota = aluno::select('id','nome')->with('notas')->get();
        return response()->json(['notas'=>$nota],200);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nota = new Nota;
        $nota->aluno = $request->input('aluno');
        $nota->nota = $request->input('nota');

        if ($nota->save()){
            return response()->json(['nota'=>$nota],200);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $nota = aluno::select('id','nome')->with('notas')->findOrFail($id);
        return response()->json(['notas'=>$nota],200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
