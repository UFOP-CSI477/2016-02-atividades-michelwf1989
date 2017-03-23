@extends('layout.master')

@section('conteudo')

      <h1>Editar estado</h1>

      <form method="post" action="/estados/{{ $estado->id }}">

        {{ method_field('PATCH') }}
        {{ csrf_field() }}

        Nome: <input type="text" name="nome" value="{{ $estado->nome }}" /><br>
        Sigla: <input type="text" name="sigla" value="{{ $estado->sigla }}" /><br>

        <input type="submit" value="Salvar"/>

      </form>

@endsection
