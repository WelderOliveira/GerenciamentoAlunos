@extends('template.layout')

@section('title','Cadastrar Aluno')

@section('content')
    <form action="{{ route('cadastrarAluno') }}" method="post">
        @csrf
        <div class="form-group">
            <label>Nome</label>
            <input type="text" class="form-control" id="nome" name="nome">
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
@stop
