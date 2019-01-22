<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Materias extends Model
{
    protected $fillable = [
        'nombre', 'descripcion'
    ];

    public function getMateriasProfesor($idProfesor){
    	$datos = DB::table('materias')
                    ->join('materiasprofesors','materias.idMateria','=','materiasprofesors.idMateria')
                    ->join('cursosmaterias','cursosmaterias.idMateria','=','materias.idMateria')
                    ->where('materiasprofesors.idProfesor', $idProfesor)
                    ->select('materias.idMateria', 'materias.nombre', 'cursosmaterias.idCurso')->get();
        return $datos;
    }
}
