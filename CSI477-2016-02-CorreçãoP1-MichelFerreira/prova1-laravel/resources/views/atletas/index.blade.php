@extends('layout.master2')

@section('content')
<br><br>


<div class="container well">		
	<div class="col-sm-2 "> 
	  		
		<ul class="nav nav-pills nav-stacked">
			<li align= "center">
				<a href="/atletas/incluirRegistro">Incluir Registros</a>
			</li>
		</ul>

	</div>

	<div class="col-sm-8 col-sm-offset-1" id="conteudo">
		<h4 align="center" class="text-warning">Lista de Eventos Inscritos</h4>
		<br>
		<table class="table table-striped table-bordered">
			<tr>
				<th class="text-center">ID</th>
				<th class="text-center">Evento</th>
				<th class="text-center">Data</th>
				<th class="text-center">Pago</th>
			</tr>
			@foreach($registros as $r)
				<tr>
				    <td class="text-center">{!! $r->id !!}</td>
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
	</div>
</div>
@endsection