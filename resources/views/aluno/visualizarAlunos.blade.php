@extends('template.layout')

@section('title','Listar Todos')

@section('content')
    <div class="container">
        <table class="table table-striped table-dark">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col" class="text-center">Nome</th>
            </tr>
            </thead>
            <tbody>
            @foreach($alunos as $aluno)
                <tr>
                    <th scope="row">{{$aluno->id}}</th>
                    <td class="text-center">{{$aluno->nome}}</td>
                    <td class="text-right">
                        <a href="{{ route('cadastrarNota',['id'=>$aluno->id]) }}"
                           title="Dar nota a {{$aluno->nome}}" class="btn btn-success">Adicionar</a>
                        |
                        <a href="{{ route('visualizarNota',['id' => $aluno->id])}}"
                           title="Visualizar notas de {{$aluno->nome}}" class="btn btn-warning">Visualizar
                        </a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>


@stop
@section('script')
    <script>

    </script>
@stop
