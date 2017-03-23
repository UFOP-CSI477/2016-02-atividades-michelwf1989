@extends('layout.master')

@section('conteudo')

        <h1>Alunos</h1>
        <a href="/alunos/create" class = "btn btn-primary">Inserir</a>
        <table class="table  table-striped">

        <thead>
           <tr>
           <th>Nome</th> 
           <th>Rua</th> 
           <th>Numero</th> 
           <th>Bairro</th> 
           <th>Cidade</th> 
           <th>Cep</th> 
           <th>Email</th> 
           
    </thead>
    <tbody>
        @foreach($alunos as $a)
<tr>
       <td> <a href="/alunos/{{ $a->id }}">{{ $a->nome }}</a></td>
       <td>{{ $a->rua}}</td>
       <td>{{ $a->numero}}</td>
       <td>{{ $a->bairro}}</td>
       <td>{{ $a->cidade_id}}</td>
       <td>{{ $a->cep}}</td>
       <td>{{ $a->mail}}</td>

    </tr>

    </tbody>            
        @endforeach
        
            </table>

@endsection
