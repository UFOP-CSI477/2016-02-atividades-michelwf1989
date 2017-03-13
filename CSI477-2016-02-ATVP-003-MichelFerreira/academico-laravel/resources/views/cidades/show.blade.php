@extends('layout.master')

@section('conteudo')

      <h1>Exibir Cidade</h1>

      <form method="post" action="/cidades/{{ $cidade->id }}">

        {{ method_field('DELETE') }}
        {{ csrf_field() }}

        Nome:  {{ $cidade->nome }}<br>
        Estado: {{ $cidade->disciplina_id }}<br>
        <button href="/cidade/{{ $cidade->id }}/edit" class="btn btn-primary"> editar</button>
        
        <button type="submit" class="btn btn-danger" value="Excluir" >Excluir</button>
        <a href="/cidades" class="btn btn-primary" >Voltar</a> 
              
          
      </form>

@endsection
