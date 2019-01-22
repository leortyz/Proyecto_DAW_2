<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Unidad Educativa Alfredo Veintimilla Moscozo</title>
    <link rel="stylesheet" href="{{ URL::asset('static/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('static/css/style2.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>    
    <script src="{{ URL::asset('static/js/bootstrap.min.js') }}"></script>
    <script src="https://d3js.org/d3.v5.min.js"></script>
  </head>
  <body>    
    <div class="container-fluid">
      <div class="row">
        <header class="col-md-12 col-sm-12 header_in">
          <h1 class="col-md-11 col-sm-12 texto header_h1">Bienvenido, {{$nombre}} {{$apellido}}</h1>
          <div class="col-md-1 col-sm-3 icon-social">
            <a href="/login-profesor"><i class="fa fa-sign-out salir"></i></a>
          </div>
        </header> 
      </div>
      <div class="row">      
        <section class="col-md-12 col-sm-12">
          <div class="row">
            <div class="col-md-3 col-sm-3">
              <br>              
              <h3 class="col-md-12 col-sm-12">Perfil</h3>
              <br>
              <br>
              <form class="col-md-12 col-sm-12 perfil">
                <div class="form-group">
                  <label for="exampleInputEmail1">Cedula</label>
                  <input type="text" class="form-control form_perfil" id="exampleInputEmail1" value="{{$datos[0]->cedula}}" readonly>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Nombres</label>
                  <input type="text" class="form-control form_perfil" id="exampleInputEmail1" value="{{$datos[0]->primerNombre}} {{$datos[0]->segundoNombre}}" readonly>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Apellidos</label>
                  <input type="text" class="form-control form_perfil" id="exampleInputEmail1" value="{{$datos[0]->primerApellido}} {{$datos[0]->segundoApellido}}" readonly>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Telefono</label>
                  <input type="text" class="form-control form_perfil" id="exampleInputEmail1" value="{{$datos[0]->telefono}}" readonly>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Email</label>
                  <input type="text" class="form-control form_perfil" id="exampleInputEmail1" value="{{$datos[0]->email}}" readonly>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Usuario</label>
                  <input type="text" class="form-control form_perfil" id="exampleInputEmail1" value="{{$datos[0]->usuario}}" readonly>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Contraseña</label>
                  <input type="password" class="form-control form_perfil" id="exampleInputEmail1" value="{{$datos[0]->contrasena}}" readonly>
                </div>                
              </form>
            </div>
            <div class="col-md-3 col-sm-3 div-button-dash">              
              <a href="/dash-pruebas/{{$id}}/n/{{$nombre}}/p/{{$apellido}}" class="btn btn-primary btn-block">PRUEBAS</a>
              <a href="/dash-notas/{{$id}}/n/{{$nombre}}/p/{{$apellido}}" class="btn btn-primary btn-block">CALIFICACIONES</a>
            </div>
          </div>        
        </section>
      </div>
      <br>      
      <div class="row">        
        <footer class="page-footer col-md-12 col-sm-12">
          <a class="texto footer_a" href="/contactanos">CONTACTANOS</a>
          <p class="texto footer_p">Unidad Educativa Alfredo Veintimilla Moscozo © 2018. Todos los derechos reservados.</p>
        </footer>
      </div>
    </div>
  </body>
</html>