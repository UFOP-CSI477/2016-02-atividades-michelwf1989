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
          <input type="text" name="estado" class="form-control" /><br>
          </div>
          
          <input type="submit" value="Salvar" class="btn  btn-primary"/>
          <a href="/cidades" value="Voltar" class="btn  btn-primary">Voltar</a>

          

@endsection
