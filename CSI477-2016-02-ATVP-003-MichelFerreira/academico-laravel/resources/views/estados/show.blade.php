@extends('layout.master')

@section('conteudo')

      <h1>Exibir estados</h1>

      <form method="post" action="/estados/{{ $estado->id }}">

        {{ method_field('DELETE') }}
        {{ csrf_field() }}

        Nome:  {{ $estado->nome }}<br>
        Código: {{ $estado->sigla }}<br>
<br>    
        <button href="/estados/{{ $estado->id }}/edit" class="btn btn-primary"> editar</button>
        
        <button type="submit" class="btn btn-danger" value="Excluir" >Excluir</button>
        <a href="/estados" class="btn btn-primary" >Voltar</a> 
              
          
      </form>

@endsection
