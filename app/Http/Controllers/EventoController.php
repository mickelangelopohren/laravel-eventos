<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Evento;

class EventoController extends Controller
{
	public function index()
	{
		$eventos = Evento::all();

		return view('eventos.index')->with('eventos', $eventos);
	}

	public function detalhes($id){
		$evento = Evento::find($id);
		if(empty($evento)) {
			return "Evento não existe";
		}
		return view('eventos.detalhes')->with('evento', $evento);
	}

	public function comprar($id){
		$evento = Evento::find($id);
		if(empty($evento)) {
			return "Evento não existe";
		}
		return view('eventos.comprar')->with('evento', $evento);
	}
}