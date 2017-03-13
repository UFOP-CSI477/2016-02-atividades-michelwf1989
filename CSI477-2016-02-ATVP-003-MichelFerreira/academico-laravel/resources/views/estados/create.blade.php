@extends('layout.master')

@section('conteudo')

        <h1>Inserir Estado</h1>

        <form method="post" action="/estados">

          {{ csrf_field() }}
          <div class="form-group">
          <label for="nome">Nome</label>
          <input type="text" name="nome" class="form-control" />
          </div>
           <div class="form-group">
          <label for="codigo">Sigla</label>
          <input type="text" name="sigla" class="form-control" /><br>
          </div>
          
          <input type="submit" value="Salvar" class="btn  btn-primary"/>
          <a href="/disciplinas" value="Voltar" class="btn  btn-primary">Voltar</a>

          

@endsection
