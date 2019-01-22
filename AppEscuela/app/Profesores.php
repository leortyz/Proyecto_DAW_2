<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\DB;

class Profesores extends Authenticatable
{
           
    use Notifiable;
/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'cedula', 'primerNombre', 'segundoNombre', 'primerApellido', 'segundoApellido', 'telefono', 'email', 'usuario', 'contrasena'
    ];
/**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'contrasena', 'remember_token',
    ];

    public function getAuthPassword(){
        return $this->contrasena;
    }


    public function getData($user, $pass){
        $datos = DB::table('profesores')
                    ->select('idProfesor','primerNombre','primerApellido')
                    ->where('usuario',$user)
                    ->where('contrasena',$pass)->get();
        return $datos;
    }


    public function getCursosMaterias($idProfesor){
        $datos = DB::table('materiasprofesors')
                    ->join('materias','materias.idMateria','=','materiasprofesors.idMateria')
                    ->join('cursosmaterias','cursosmaterias.idMateria','=','materias.idMateria')
                    ->join('cursos','cursosmaterias.idCurso','=','cursos.idCurso')
                    ->where('materiasprofesors.idProfesor', $idProfesor)                    
                    ->select('cursos.idCurso','materias.idMateria','materias.nombre','cursos.anio','cursos.paralelo')->get();
        return $datos;
    }

    public function getPerfil($idProfesor){
        $datos = DB::table('profesores')                    
                    ->where('profesores.idProfesor', $idProfesor)                    
                    ->select('profesores.cedula','profesores.primerNombre','profesores.segundoNombre','profesores.primerApellido','profesores.segundoApellido','profesores.telefono','profesores.email','profesores.usuario','profesores.contrasena')->get();
        return $datos;   
    }
}