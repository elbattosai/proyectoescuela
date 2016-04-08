<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use App\Carrera;
use App\Materias;


use App\Http\Requests;

class controllerGeneral extends Controller
{
    

   //Mostrar las carreras existentes
	public function MostrarCarreras()
	{
		$Carrera = Carrera::all();

		return view('index',compact('Carrera'));
	}

	public function mostrarCarreraSeleccionada($id)
	{
		$Carrera = Carrera::all();
        $Materias = DB::table('materias')->where('idCarrera', $id)->get();
        
        //dd($Materias);
		return view('index',compact('Materias','Carrera'));
	}

	public function generarPDF($id)
	{

 		$temas = DB::table('temas')->where('idmaterias', $id)->get();

        $view = \View::make('materiaspdf',compact('temas'))->render();

        $pdf = \App::make('dompdf.wrapper');

        $pdf->loadHTML($view);
        
        return $pdf->stream('Temas');
	}

}
