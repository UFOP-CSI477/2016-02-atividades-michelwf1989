@extends('layout.master')

@section('conteudo')

      <h1>Exibir Turma</h1>

      <form method="post" action="/turmas/{{ $turma->id }}">

        {{ method_field('DELETE') }}
        {{ csrf_field() }}

        Nome:  {{ $turma->nome }}<br>
        Disciplina: {{ $turma->disciplina_id }}<br>
        <button href="/turmas/{{ $turma->id }}/edit" class="btn btn-primary"> editar</button>
        
        <button type="submit" class="btn btn-danger" value="Excluir" >Excluir</button>
        <a href="/turmas" class="btn btn-primary" >Voltar</a> 
              
          
      </form>

@endsection
