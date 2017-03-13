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
          <input type="text" name="codigo" class="form-control" /><br>
          </div>
          
          <input type="submit" value="Salvar" class="btn  btn-primary"/>
          <a href="/disciplinas" value="Voltar" class="btn  btn-primary">Voltar</a>

          

@endsection
