@extends('template.layout')

@section('title','Listar Todos')

@section('content')
    <div class="container">
        <form action="{{ route('adicionarNota',['id' => $aluno->id]) }}" method="post">
            @csrf
            <div class="form-group">
                <label for="recipient-name" class="col-form-label">Aluno:</label>
                <input type="text" class="form-control" value="{{$aluno->nome}}" disabled>
            </div>
            <div class="form-group">
                <label for="message-text" class="col-form-label">Nota:</label>
                <input type="number" class="form-control" id="nota" name="nota">
            </div>
            <button type="submit" class="btn btn-primary col">Enviar</button>
        </form>
    </div>
@stop
