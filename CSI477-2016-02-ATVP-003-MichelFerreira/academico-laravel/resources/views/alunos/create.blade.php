@extends('layout.master')

@section('conteudo')

        <h1>Inserir Aluno</h1>

        <form method="post" action="/alunos">

          {{ csrf_field() }}
          <div class="form-group">
          <label for="nome">Nome</label>
          <input type="text" name="nome" class="form-control" />
          </div>
           <div class="form-group">
          <label for="codigo">Numero</label>
          <input type="text" name="numero" class="form-control" /><br>
          </div>
           <div class="form-group">
          <label for="codigo">Bairro</label>
          <input type="text" name="bairro" class="form-control" /><br>
          </div>
          <div class="form-group">
          <label for="codigo">Cidade</label>
          <input type="text" name="cidade_id" class="form-control" /><br>
          </div>
          <div class="form-group">
          <label for="codigo">Cep</label>
          <input type="text" name="cep" class="form-control" /><br>
          </div>
          <div class="form-group">
          <label for="codigo">Email</label>
          <input type="text" name="mail" class="form-control" /><br>
          </div>
          <input type="submit" value="Salvar" class="btn  btn-primary"/>
          <a href="/alunos" value="Voltar" class="btn  btn-primary">Voltar</a>

          

@endsection
