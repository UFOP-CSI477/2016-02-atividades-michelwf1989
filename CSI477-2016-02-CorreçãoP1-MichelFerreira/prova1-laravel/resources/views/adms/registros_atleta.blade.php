@extends('layout.master')

@section('content')
<br><br>
<div class="container well">		
	<div class="col-sm-2 "> 
	  	
		<ul class="nav nav-pills nav-stacked">
			<li align= "center">
				<a href="/admin/listaAtletas">Lista de Atletas</a>
			</li>
			<li align= "center">
				<a href="/admin">Lista de Registros</a>
			</li>
			<li align= "center">
				<a href="/admin/listaRegistroEvento">Registro - Evento</a>
			</li>
		</ul>

	</div>

	<div class="col-sm-8 col-sm-offset-1" id="conteudo">
		<h4 align="center" class="text-warning">Lista de Registros Por Atleta</h4>
		<br>

		<div class="col-sm-6 col-sm-offset-3">
			<form class="form-horizontal" role="form" method="POST" action="{{ url('/admin/listaRegistroAtleta') }}">{{ csrf_field() }} 
				
	 			<div class="form-group">
	 				<label for="atletas" class="control-label">Atletas</label>
					<select class="form-control" name="atletas" id="atletas">
						@foreach($atletas as $a)
						    <option value="{{$a->id}}">{!!  $a->nome !!}</option>
						@endforeach
					</select>   
		        </div>

				<br>
				<div class="col-sm-12 center-block">
					<button type="submit" class="btn btn-lg btn-secondary btn-block">
	                    Gerar Relatório
	                </button>
	            </div>
			</form>
		</div>
	</div>
</div>
@endsection