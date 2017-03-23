@extends('layout.master')

@section('conteudo')

        <h1>Estados</h1>
        <a href="/estados/create" class = "btn btn-primary">Inserir</a>
        <table class="table  table-striped">

        <thead>
           <tr>
           <th>Nome</th> 
           <th>Sigla</th> 
    </thead>
    <tbody>
        @foreach($estados as $e)
<tr>
       <td> <a href="/estados/{{ $e->id }}">{{ $e->nome }}</a></td>
       <td>{{ $e->sigla}}</td>
       
    </tr>

    </tbody>            
        @endforeach
        
            </table>

@endsection
