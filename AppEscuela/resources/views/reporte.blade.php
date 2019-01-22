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
    <script src="https://d3js.org/d3.v5.min.js"></script>
  </head>
  <body>    
    <div class="container-fluid">
      <div class="row">        
        <header class="col-md-12 col-sm-12 header_in">
          <h1 class="col-md-11 col-sm-12 texto header_h1">Bienvenido, Hugo Pilligua</h1>
          <div class="col-md-1 col-sm-3 icon-social">
            <a href="/login-profesor"><i class="fa fa-sign-out salir"></i></a>
          </div>
        </header> 
      </div>
      <div class="row div-principal-reporte">
        <section class="col-md-10 col-sm-12 section-notas">          
          <div class="col-md-12 col-sm-12 btn-group">
            <a href="/ingreso-notas" class="col-md-4 col-sm-12 boton_ing_notas btn btn-primary">VOLVER</a>
            <!--<button class="col-md-4 col-sm-12 boton_ing_notas btn btn-primary" type="button" href="ingreso_notas.html">RETROCEDER</button>-->
            <button class="col-md-4 col-sm-12 boton_ing_notas btn btn-primary" type="button">IMPRIMIR</button>
          </div>
          <div class="col-md-12 col-sm-12" id="div_reporte">
          </div>
        </section>
      </div>
      <div class="row">
        <footer class="page-footer col-md-12 col-sm-12 footer-reporte">
          <a class="texto footer_a" href="/contactanos">CONTACTANOS</a>
          <p class="texto footer_p">Unidad Educativa Alfredo Veintimilla Moscozo © 2018. Todos los derechos reservados.</p>
        </footer>
      </div>
    </div>
    <script src="https://d3js.org/d3.v3.min.js"></script>
    <script src="../static/js/funciones_3d.js"></script>
  </body>
</html>