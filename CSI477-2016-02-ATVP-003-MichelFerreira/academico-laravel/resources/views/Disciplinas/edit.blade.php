@extends('layout.master')

@section('conteudo')

      <h1>Editar disciplina</h1>

      <form method="post" action="/disciplinas/{{ $disciplina->id }}">

        {{ method_field('PATCH') }}
        {{ csrf_field() }}

        Nome: <input type="text" name="nome" value="{{ $disciplina->nome }}" /><br>
        Código: <input type="text" name="codigo" value="{{ $disciplina->codigo }}" /><br>
        Carga Horária: <input type="text" name="carga" value="{{ $disciplina->carga }}" /><br>

        <input type="submit" value="Salvar"/>

      </form>

@endsection
