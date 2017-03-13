<?php

namespace App\Http\Controllers;


use App\Atleta;
use App\Evento;
use App\Registro;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class AtletasController extends Controller
{

	public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $registros = Registro::with('evento')->get()->sortByDesc('data')->where('atleta_id', auth()->user()->id);
		return view('atletas.index')->with(compact('registros'));
    }
    
	public function incluirRegistro(){
        $eventos = Evento::all();
        return view('atletas.incluirRegistros', compact('eventos'));   
    }

    public function salvaRegistro(Request $request){
        $registro = new Registro;
        $input = Input::all();
        $registro['atleta_id'] = auth()->user()->id;
        $registro['evento_id'] = $input['eventos'];
        $registro['data'] = $input['data'];
        $registro['pago'] = 0;
        $registro->save();

        return redirect('/atletas');
    }

}
