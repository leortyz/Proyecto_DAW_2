<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Cursos extends Model
{
    protected $fillable = [
        'anio', 'paralelo'
    ];

    public function cargarCursosProfesor($idProfesor){
    	$datos = DB::table('materiasprofesors')
                    ->join('cursosmaterias','cursosmaterias.idMateria','=','materiasprofesors.idMateria')
                    ->join('cursos','cursos.idCurso','=','Cursosmaterias.idCurso')                    
                    ->where('materiasprofesors.idProfesor', $idProfesor)
                    ->groupBy('cursos.idCurso')
                    ->select('cursos.idCurso','cursos.anio','cursos.paralelo')->get();
        return $datos;
    }
}
