@extends('template.layout')

@section('title','Listar Todos')

@section('content')
    <div class="container">
        <ul class="list-group">
            <li class="text-center list-group-item active">{{$alunos->nome}}</li>

                @foreach($alunos->notas as $nota)
                    <li class="list-group-item">{{$nota->nota}}</li>
                @endforeach
            <li class="list-group-item disabled">Nota Total = {{$alunos->notas->sum('nota')}}</li>
        </ul>
    </div>
@stop
