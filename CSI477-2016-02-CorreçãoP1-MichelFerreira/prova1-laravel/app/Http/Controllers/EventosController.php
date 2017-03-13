<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Evento;

class EventosController extends Controller
{
 	public function index(){
		
		$eventos = Evento::orderBy('data', 'asc')->get();
		
		return view('eventos.index')->with('eventos', $eventos);
    }
}
