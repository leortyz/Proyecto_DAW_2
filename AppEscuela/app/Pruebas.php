<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Pruebas extends Model
{
    protected $fillable = [
        'tipo', 'periodo', 'fecha', 'calificacion', 'idCurso', 'idMateria', 'idProfesor'
    ];

    public function getPruebas($idProfesor){
    	$datos = DB::table('pruebas')
                    ->join('cursos','cursos.idCurso','=','pruebas.idCurso')
                    ->join('materias','materias.idMateria','=','pruebas.idMateria')
                    ->where('pruebas.idProfesor', $idProfesor)
                    ->select('pruebas.id','cursos.anio','cursos.paralelo', 'materias.nombre', 'pruebas.tipo','pruebas.periodo','pruebas.fecha','pruebas.calificacion')->get();
        return $datos;
    
    }

}
