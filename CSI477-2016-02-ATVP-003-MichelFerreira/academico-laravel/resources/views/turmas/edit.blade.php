@extends('layout.master')

@section('conteudo')

      <h1>Editar Turma</h1>

      <form method="post" action="/turmas/{{ $turma->id }}">

        {{ method_field('PATCH') }}
        {{ csrf_field() }}

        Nome: <input type="text" name="nome" value="{{ $turma->nome }}" /><br>
        Disciplina: <input type="text" name="codigo" value="{{ $turma->codigo }}" /><br>

        <input type="submit" value="Salvar"/>

      </form>

@endsection
