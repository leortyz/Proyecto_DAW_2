<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Unidad Educativa Alfredo Veintimilla Moscozo</title>
    <link rel="stylesheet" href="../static/css/bootstrap.min.css">
    <link rel="stylesheet" href="../static/css/style2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="../static/js/bootstrap.min.js"></script>
  </head>
  <body>
    <div class="container-fluid">
      <div class="row">
        <header class="col-md-12 col-sm-12 header_principal">
          <img class = "col-md-1 col-sm-1 img-fluid" src="../static/img/logo.jpeg" alt="logo">
          <h1 class="col-md-8 col-sm-12 texto header_h1">UNIDAD EDUCATIVA<br>ALFREDO VEINTIMILLA MOSCOZO</h1>
          <div class="col-md-3 col-sm-3 icon-social">
            <a href="#" class="fa fa-google icon-social"></a>
            <a href="#" class="fa fa-twitter icon-social"></a>
            <a href="#" class="fa fa-facebook icon-social"></a>
          </div>
        </header>  
      </div>
      <div class="row sticky-top">
        <nav class="navegacion navbar navbar-expand-sm navbar-light col-xl-12">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menuPrincipal">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div id="menuPrincipal" class="collapse navbar-collapse justify-content-end">
                <ul class="list-inline navbar-nav w-100">
                    <li class="list-inline-item nav-item active px-2 mr-auto"><a class="nav-link texto navegacion_element" href="/">INICIO</a></li>
                    <li class="list-inline-item nav-item px-2"><a class="nav-link texto navegacion_element" href="/login-profesor">PROFESOR</a></li>
                    <li class="list-inline-item nav-item px-2"><a class="nav-link texto navegacion_element" href="/linea-tiempo">HISTORIA</a></li>
                    <li class="list-inline-item nav-item px-2"><a class="nav-link texto navegacion_element" href="/quienes-somos">¿QUIENES SOMOS?</a></li>
                    <li class="list-inline-item nav-item px-2"><a class="nav-link texto navegacion_element" href="/que-hacemos">¿QUE HACEMOS?</a></li>
                </ul>
            </div>
        </nav>
      </div>      
      <div class="principal_contactanos row">
        <section class="col-md-12">
          <div class="col-md-1 col-sm-1">
            
          </div>
          <div class="col-md-10 col-sm-10">
            <form class="col-md-12 form_contacto">
              
              <div class="form-group">
                <h2 class="col-md-12 casillas_ct texto titulo_informacion_p">INGRESE INFORMACION</h2>
              </div>
              
              <div class="form-group">
                <div class="col-md-6 casillas_ct">  
                  <label class="col-md-4 texto titulo_informacion" for="n_input_nombre">NOMBRES:</label>
                  <input class="col-md-8 texto form-control" type="text" placeholder="Ingrese nombres ..." name="n_input_nombre" required>
                </div>

                <div class="col-md-6 casillas_ct">
                  <label class="col-md-4 texto titulo_informacion" for="n_input_apellido">APELLIDOS:</label>
                  <input class="col-md-8 texto form-control" type="text" placeholder="Ingrese apellidos ..." name="n_input_apellido" required>  
                </div>  
              </div>

              <div class="form-group">
                <div class="col-md-6 casillas_ct">  
                  <label class="col-md-8 texto titulo_informacion" for="n_input_fn">FECHA NACIMIENTO:</label>
                  <input class="col-md-4 texto form-control" type="date" placeholder="Ingrese fn ..." name="n_input_fn" required>
                </div>

                <div class="col-md-6 casillas_ct">
                  <label class="col-md-4 texto titulo_informacion" for="n_input_ciudad">CIUDAD</label>
                  <input class="col-md-8 texto form-control" list="list_ciudad" name="n_input_ciudad">
                  <datalist id="list_ciudad">
                    <option value="CIUDADES">
                  </datalist>   
                </div>
              </div>

              <div class="form-group">
                <div class="col-md-6 casillas_ct">  
                  <label class="col-md-4 texto titulo_informacion" for="n_input_email">EMAIL:</label>
                  <input class="col-md-8 texto form-control" type="text" placeholder="Ingrese email ..." name="n_input_email" required>
                </div>

                <div class="col-md-6 casillas_ct">
                  <label class="col-md-4 texto titulo_informacion" for="n_input_nombre">FOTO:</label>
                  <input class="col-md-8 texto form-control-file" type="file" id="avatar" name="avatar" accept="image/png, image/jpeg" required>                
                </div>
              </div>

              <div class="form-group">
                <div class="col-md-12 casillas_ct">  
                  <label class="col-md-12 texto titulo_informacion" for="n_input_comentario">COMENTARIO:</label>
                  <textarea class="col-md-12 texto form-control" rows="4" cols="50">              
                  </textarea>                                
                </div>
              </div>

              <div class="form-group">
                <div class="col-md-12 casillas_lg">
                  <button class="col-md-12 texto boton btn btn-primary" type="button">ENVIAR</button>                
                </div>                
              </div>
            </form>
          </div>
          <div class="col-md-1 col-sm-1">
            
          </div>          
        </section>
      </div>
      <div class="row">
        <footer class="col-md-12 col-sm-12">
          <a class="texto footer_a" href="/contactanos">CONTACTANOS</a>
          <p class="texto footer_p">Unidad Educativa Alfredo Veintimilla Moscozo © 2018. Todos los derechos reservados.</p>
        </footer>
      </div>
    </div>
  </body>
</html>