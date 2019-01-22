<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use App\Profesores;

class AuthController extends Controller
{
    public function login(Request $request){
    	print($request -> n_input_usuario);
    	$userdata = array(
    		'usuario' => $request -> n_input_usuario,
    		'contrasena' => $request -> n_input_pass
    	);

    	if(Auth::attempt($userdata)){            

            $profesor = new Profesores;
            $datosProfesor = $profesor->getData($userdata['usuario'],$userdata['contrasena']);

            return redirect()->route('dash-login',['id' => $datosProfesor[0]->idProfesor,'nombre' => $datosProfesor[0]->primerNombre,'apellido' => $datosProfesor[0]->primerApellido]);


    	}

    	return Redirect::to('login-profesor');
    }


    public function logout(){
    	Auth::logout();
    	return Redirect::to('ingreso-notas');
    }
}
