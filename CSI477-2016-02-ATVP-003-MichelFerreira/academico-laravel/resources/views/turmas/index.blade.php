@extends('layout.master')

@section('conteudo')

        <h1>Turmas</h1>
        <a href="/turmas/create" class = "btn btn-primary">Inserir</a>
        <table class="table  table-striped">

        <thead>
           <tr>
           <th>Nome</th>
           <th>Disciplina</th> 
    </thead>
    <tbody>
        @foreach($turmas as $t)
<tr>
       <td> <a href="/turmas/{{ $t->id }}">{{ $t->nome }}</a></td>
       <td>{{ $t->disciplina_id}}</td>
       
    </tr>

    </tbody>            
        @endforeach
        
            </table>

@endsection
