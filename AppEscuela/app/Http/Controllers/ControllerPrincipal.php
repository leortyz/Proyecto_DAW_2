<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profesores;
use App\Cursos;
use App\Materias;
use App\Pruebas;

class ControllerPrincipal extends Controller
{
    public function index(){
    	return view('index');
    }

    public function contactanos(){
    	return view('contactanos');
    }

    public function dash_login($id, $nombre, $apellido){
        $profesor = new Profesores;
        $datos = $profesor -> getPerfil($id);

        return view('dash', ['id' => $id,'nombre' => $nombre,'apellido' => $apellido, 'datos' => $datos]);
    }

    public function dash_pruebas($id, $nombre, $apellido){
        $cursos = new Cursos;
        $nombres_cursos = $cursos->cargarCursosProfesor($id);

        $materias = new Materias;
        $nombres_materias = $materias->getMateriasProfesor($id);        

        $pruebas = new Pruebas;
        $pruebas_profesor = $pruebas->getPruebas($id);

        return view('dash_pruebas', ['id' => $id,'nombre' => $nombre,'apellido' => $apellido, 'cursos' => $nombres_cursos, 'materias' => $nombres_materias, 'pruebas' => $pruebas_profesor]);
    }    

    public function ingreso_notas($id, $nombre, $apellido){        
        return view('ingreso_notas', ['id' => $id,'nombre' => $nombre,'apellido' => $apellido]);
    }

    public function linea_tiempo(){
    	return view('linea_tiempo');
    }

    public function login_profesor(){
    	return view('login_profesor');
    }

    public function que_hacemos(){
    	return view('que_hacemos');
    }

    public function quienes_somos(){
    	return view('quienes_somos');
    }

    public function reporte(){
    	return view('reporte');
    }
}
