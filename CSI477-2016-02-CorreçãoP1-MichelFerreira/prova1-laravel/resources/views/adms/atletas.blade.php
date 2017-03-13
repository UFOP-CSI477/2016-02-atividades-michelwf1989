@extends('layout.master')

@section('content')
<br><br>
<div class="container well">		
	<div class="col-sm-2 "> 
	  		
		<ul class="nav nav-pills nav-stacked">
			<li align= "center">
				<a href="/admin">Lista de Registros</a>
			</li>
			<li align= "center">
				<a href="/admin/listaRegistroEvento">Registro - Evento</a>
			</li>
			<li align= "center">
				<a href="/admin/listaRegistroAtleta">Registro - Atleta</a>
			</li>
		</ul>

	</div>


	<div class="col-sm-8 col-sm-offset-1" id="conteudo">
		<h4 align="center" class="text-warning">Lista de Atletas</h4>
		<br>
		<table class="table table-striped table-bordered">
			<tr>
				<th class="text-center">ID</th>
				<th class="text-center">Atleta</th>
			</tr>
			
			@foreach($atletas as $a)
			
				<tr>
					<td align="center">
						{!! $a->id !!}
					</td>
					<td align="center">
						{!! $a->nome !!}
					</td>
				</tr>

			@endforeach
		</table>
	</div>


</div>
@endsection