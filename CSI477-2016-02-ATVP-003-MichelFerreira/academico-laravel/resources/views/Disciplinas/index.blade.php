@extends('layout.master')

@section('conteudo')

        <h1>Disciplinas</h1>

        @if(Session::has('nome'))
          <h2>{{ Session::get('nome') }}</h2>
        @endif

        <a href="/disciplinas/create" class="btn btn-primary">Inserir</a>

        <table class="table table-striped">
          <thead>
              <tr>
                <th>Nome</th>
                <th>Código</th>
                <th>Carga Horária</th>
              </tr>
          </thead>
          <tbody>
              @foreach($disciplinas as $d)
              <td><a href="/disciplinas/{{ $d->id }}">{{ $d->nome }}</a></td>
              <td>{{ $d->codigo}}</td>
              <td>{{ $d->carga}}</td></tr>
              @endforeach
        </tbody>
        </table>

@endsection
