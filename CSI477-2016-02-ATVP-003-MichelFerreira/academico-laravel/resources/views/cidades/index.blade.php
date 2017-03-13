@extends('layout.master')

@section('conteudo')

        <h1>Cidades</h1>
        <a href="/cidades/create" class = "btn btn-primary">Inserir</a>
        <table class="table  table-striped">

        <thead>
           <tr>
           <th>Nome</th>
           <th>Estado</th>
    </thead>
    <tbody>
        @foreach($cidades as $c)
<tr>
       <td> <a href="/cidades/{{ $c->id }}">{{ $c->nome }}</a></td>
       <td>{{ $c->estado_id}}</td>

    </tr>

    </tbody>
        @endforeach

            </table>

@endsection
