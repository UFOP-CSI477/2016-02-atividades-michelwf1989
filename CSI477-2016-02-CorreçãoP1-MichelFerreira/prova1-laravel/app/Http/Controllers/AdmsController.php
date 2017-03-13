<?php

namespace App\Http\Controllers;


use App\Atleta;
use App\Evento;
use App\Registro;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class AdmsController extends Controller
{

    public function index(){
        $registros = Registro::all();
        
        $valorTotal = 0;
        $qtdRegistros = 0;

        foreach ($registros as $r){ 
            $valorTotal += $r->evento->preco;
            $qtdRegistros++;    
        }

        return view('adms.index')->with(compact('registros','valorTotal','qtdRegistros'));
    }

    public function listaAtletas(){
        $atletas = Atleta::all()->sortBy('nome');
        return view('adms.atletas')->with(compact('atletas'));
    }

    public function indexAtleta(){
        $atletas = Atleta::all();
        return view('adms.registros_atleta')->with(compact('atletas'));
    }
    
    public function listaRegistroAtleta(Request $request){

        $input = Input::all();
        $registros = Registro::all()->where('atleta_id', $input['atletas']);
    
        $valorTotal = 0;
        $qtdRegistros = 0;

        foreach ($registros as $r){ 
            $valorTotal += $r->evento->preco;
            $qtdRegistros++;    
        }

        return view('adms.relatorio_registros_atleta')->with(compact('registros','valorTotal','qtdRegistros'));
    }

    public function indexEvento(){
        $eventos = Evento::all();
        return view('adms.registros_evento')->with(compact('eventos'));
    }

    public function listaRegistroEvento(Request $request){

        $input = Input::all();
        $registros = Registro::all()->where('evento_id', $input['eventos']);
    
        $valorTotal = 0;
        $qtdRegistros = 0;

        foreach ($registros as $r){ 
            $valorTotal += $r->evento->preco;
            $qtdRegistros++;    
        }

        return view('adms.relatorio_registros_evento')->with(compact('registros','valorTotal','qtdRegistros'));
    }

}
