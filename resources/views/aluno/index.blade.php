@extends('template.layout')

@section('title','Listar Todos')

@section('content')
    <table class="table table-striped table-dark">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col" class="text-center">Nome</th>
            {{--            <th scope="col"></th>--}}
        </tr>
        </thead>
        <tbody>
        @foreach($alunos as $aluno)
            <tr>
                <th scope="row">{{$aluno->id}}</th>
                <td class="text-center">{{$aluno->nome}}</td>
                <td class="text-right">
{{--                    <a href="{{ route('adicionarNota', ['id'=>$aluno->id]) }}" title="Dar nota a {{$aluno->nome}}">--}}
                        |
{{--                    <a href="{{ route('visualizarNota', ['id'=>$aluno->id]) }}" title="Visualizar nota de {{$aluno->nome}}">--}}
                </td>
            </tr>
        @endforeach

        </tbody>
    </table>
@stop
