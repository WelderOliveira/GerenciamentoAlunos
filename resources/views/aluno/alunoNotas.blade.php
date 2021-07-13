@extends('template.layout')

@section('title','Listar Notas')

@section('content')
    <div class="card-body table-responsive">
        <table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
            <thead>
            <tr>
                <th class="th-sm">Nome

                </th>
                <th class="th-sm">Nota

                </th>
            </tr>
            </thead>
            <tbody>
            @foreach($alunos as $aluno)
                @foreach($aluno->notas as $nota)
                    <tr>
                        <td>{{$aluno->nome}}</td>
                        <td>{{$nota->nota}}</td>
                    </tr>
                @endforeach
            @endforeach
            </tbody>
            <tfoot>
            <tr>
                <th>Nome
                </th>
                <th>Nota
                </th>
            </tr>
            </tfoot>
        </table>

        @stop

        @section('script')

            <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
            <script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap5.min.js"></script>
            <script>
                $(document).ready(function () {
                    $.extend($.fn.dataTable.defaults, {
                        searching: true,
                        ordering: true
                    });
                    $('#dtBasicExample').DataTable();
                    $('.dataTables_length').addClass('bs-select');
                });
            </script>

@stop
