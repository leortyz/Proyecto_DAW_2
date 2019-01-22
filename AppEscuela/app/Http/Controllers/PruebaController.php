<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pruebas;

class PruebaController extends Controller
{
    public function create(Request $request){       
    	
    	$prueba = new Pruebas;    	
    	$prueba -> tipo = $request -> tipo;
    	$prueba -> periodo = $request -> periodo;
    	$prueba -> fecha = $request -> fecha;
    	$prueba -> calificacion = $request -> calificacion;
    	$prueba -> idCurso = $request -> idCurso;
    	$prueba -> idMateria = $request -> idMateria;
    	$prueba -> idProfesor = $request -> idProfesor;    
        
        $prueba -> save();
        
        return redirect()->back();
    }

    
    public function read(){
    	$id_cliente = 72;

        $cliente = new Cliente;
        $datos = $cliente -> getNombresApellidos($id_cliente);

    	$calificacion = new Calificacion;
    	$registro = new Registro;
    	$peliculas_registradas = $registro->getPeliculasRegistradas($id_cliente);
    	$peliculas_calificadas = $calificacion->getPeliculasCalificadas($id_cliente);

    	return view('calificacion', ['id_cliente' => $id_cliente,'peliculas_registradas' => $peliculas_registradas,'peliculas_calificadas' => $peliculas_calificadas, 'datos_c' => $datos]);
    }        

    
    public function update(Request $request){
        $prueba = Pruebas::findOrFail($request -> idPrueba);
    	$prueba -> fecha = $request -> fecha;        
        $prueba -> save();

        return redirect()->back();
    }

    public function delete(Request $request){  
        $prueba = Pruebas::findOrFail($request -> idPrueba);        
        $prueba -> delete();
     	   
        return redirect()->back();
    }    
}
