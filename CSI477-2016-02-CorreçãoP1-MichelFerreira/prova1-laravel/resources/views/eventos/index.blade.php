@extends('layout.master')

@section('content')
<br><br>

<div class="container well">
    <div class= "col-sm-10 col-sm-offset-1">
    	<h2 align="center">Eventos</h2>
    	<br><br>   
        

        <table class="table table-striped table-bordered">

            <tr>
                <th class="text-center">Id</th>
                <th class="text-center">Nome</th>
                <th class="text-center">Preço</th>
                <th class="text-center">Data</th>
            </tr>

            @foreach ($eventos as $e)
                <tr>
                    <td align="center">
                        {{ $e->id}}
                    </td>
                    <td align="center">
                        {{ $e->nome}}
                    </td>
                    <td align="center">
                        {{ $e->preco}}
                    </td>
                    <td align="center">
                        {{ $e->data}}
                    </td>                   
                </tr>    
            @endforeach

        </table> 
    </div>
</div>
@endsection