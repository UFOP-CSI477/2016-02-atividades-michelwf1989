@extends('layout.master')

@section('conteudo')

        <h1>Inserir Cidade</h1>

        <form method="post" action="/cidades">

          {{ csrf_field() }}

          <div class="form-group">
          <label for="nome">Nome</label>
          <input type="text" name="nome" class="form-control" />
          </div>
           <div class="form-group">
          <label for="codigo">Estado</label>
          <select type="text" name="estado_id" class="form-control" >
          @foreach($estados as $e)
          <option value="{{$e->id}}"> {{$e->nome}}-{{$e->sigla}}</option>
          @endforeach
          </select><br>

          </div>

          <input type="submit" value="Salvar" class="btn  btn-primary"/>
          <a href="/cidades" value="Voltar" class="btn  btn-primary">Voltar</a>



@endsection
