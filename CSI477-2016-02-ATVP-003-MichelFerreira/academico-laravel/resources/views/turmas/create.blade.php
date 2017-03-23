@extends('layout.master')

@section('conteudo')

        <h1>Inserir Turma</h1>

        <form method="post" action="/turmas">

          {{ csrf_field() }}

          <div class="form-group">
          <label for="nome">Nome</label>
          <input type="text" name="nome" class="form-control" />
          </div>
           <div class="form-group">
          <label for="codigo">Disciplina</label>
          <select type="text" name="disciplina_id" class="form-control" >
           @foreach($disciplinas as $d)
          <option value="{{$d->id}}"> {{$d->nome}}</option>
          @endforeach
          </select>
          <br>
          </div>

          <input type="submit" value="Salvar" class="btn  btn-primary"/>
          <a href="/disciplinas" value="Voltar" class="btn  btn-primary">Voltar</a>



@endsection
