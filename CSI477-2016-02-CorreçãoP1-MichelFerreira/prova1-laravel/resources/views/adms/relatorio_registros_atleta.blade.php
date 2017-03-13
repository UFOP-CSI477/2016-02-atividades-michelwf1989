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
				<a href="/admin/listaAtletas">Lista de Atletas</a>
			</li>
			<li align= "center">
				<a href="/admin/listaRegistroAtleta">Registro - Atleta</a>
			</li>
			<li align= "center">
				<a href="/admin/listaRegistroEvento">Registro - Evento</a>
			</li>
		</ul>

	</div>

	<div class="col-sm-8 col-sm-offset-1" id="conteudo">
		<h4 align="center" class="text-warning">Lista de Registros Por Atleta</h4>
		<br>

		<table class="table table-striped table-bordered">			
			<tr>
				<th class="text-center">Id</th>
				<th class="text-center">Atleta</th>
				<th class="text-center">Evento</th>
				<th class="text-center">Data</th>
				<th class="text-center">Pago</th>
			</tr>
	
			@foreach($registros as $r)
				<tr>
				    <td class="text-center">{!! $r->id !!}</td>
				    <td class="text-center">{!! $r->atleta->nome !!}</td>
				    <td class="text-center">{!! $r->evento->nome !!}</td>
				    <td class="text-center">{!! $r->data !!}</td>
			    	@if( $r->pago == 0)
			    		<td class="text-center">Não</td>
			    	@else
						<td class="text-center">Sim</td>
			    	@endif
				    
				</tr>
			@endforeach
		</table>
		<br><br>
		<legend>Quantidade de Registros:</legend>
			{{$qtdRegistros}} registros
		
		<br><br>
		
		<legend>Valor Total:</legend>
			R$: {{$valorTotal}}
	</div>
	
</div>
@endsection