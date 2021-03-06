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
        <nav id="sidebar" class="col-md-2 col-sm-12">
            <div class="sidebar-header col-md-12 col-sm-12  ">
                <h2 class="texto titulo_h2_sb col-md-12 col-sm-12">CURSOS</h2>
            </div>
            <ul class="list-unstyled components col-md-12 col-sm-12">                
                <li>
                    <a href="#" class="texto col-md-12 col-sm-12 active">MATEMATICAS A1</a>
                </li>
                <li>
                    <a href="#" class="texto col-md-12 col-sm-12">MATEMATICAS A2</a>
                </li>
                <li>
                    <a href="#" class="texto col-md-12 col-sm-12">MATEMATICAS A3</a>      
                </li>
                <li>
                    <a href="#" class="texto col-md-12 col-sm-12">FISICA A1</a>
                </li>
                <li>
                    <a href="#" class="texto col-md-12 col-sm-12">FISICA A2</a>
                </li>
                <li>
                    <a href="reporte.html" class="texto col-md-12 col-sm-12">REPORTE</a>            
                </li>
            </ul>
        </nav>
        <section class="col-md-10 col-sm-12 section-notas">           
          <div class="col-md-12 col-sm-12">
              <h2>Notas</h2>
          </div>
          <div class="col-md-12 col-sm-12 btn-group">
            <button class="col-md-4 col-sm-12 boton_ing_notas btn btn-primary" type="button">GUARDAR</button>
            <button class="col-md-4 col-sm-12 boton_ing_notas btn btn-primary" type="button">ELIMINAR</button>
          </div>
          <div class="col-md-12 col-sm-12 table-responsive div-tabla">
            <table class="col-md-12 col-sm-12 tabla-notas" id="customers">
              <tr>
                <th>NO</th>
                <th>NOMBRES</th>
                <th>APELLIDOS</th>
                <th>CEDULA</th>
                <th>NOTA LECCION</th>
                <th>NOTA DEBER</th>
                <th>NOTA EXAMEN</th>
                <th>NOTA FINAL</th>          
              </tr>
              <tr>
                <td>1</td>
                <td>CARLA</td>
                <td>MORALES</td>
                <td>0987654321</td>
                <td>10</td>
                <td>8</td>
                <td>9</td>
                <td>9.5</td>          
              </tr>
              <tr>
                <td>2</td>
                <td>JOSE</td>
                <td>ORELLANA</td>          
                <td>1234567890</td>
                <td>8</td>
                <td>6</td>
                <td>7</td>
                <td>7.5</td>
              </tr>
			        <tr>
                <td>1</td>
                <td>CARLA</td>
                <td>MORALES</td>
                <td>0987654321</td>
                <td>10</td>
                <td>8</td>
                <td>9</td>
                <td>9.5</td>          
              </tr>
              <tr>
                <td>2</td>
                <td>JOSE</td>
                <td>ORELLANA</td>          
                <td>1234567890</td>
                <td>8</td>
                <td>6</td>
                <td>7</td>
                <td>7.5</td>
              </tr><tr>
                <td>1</td>
                <td>CARLA</td>
                <td>MORALES</td>
                <td>0987654321</td>
                <td>10</td>
                <td>8</td>
                <td>9</td>
                <td>9.5</td>          
              </tr>
              <tr>
                <td>2</td>
                <td>JOSE</td>
                <td>ORELLANA</td>          
                <td>1234567890</td>
                <td>8</td>
                <td>6</td>
                <td>7</td>
                <td>7.5</td>
              </tr><tr>
                <td>1</td>
                <td>CARLA</td>
                <td>MORALES</td>
                <td>0987654321</td>
                <td>10</td>
                <td>8</td>
                <td>9</td>
                <td>9.5</td>          
              </tr>
              <tr>
                <td>2</td>
                <td>JOSE</td>
                <td>ORELLANA</td>          
                <td>1234567890</td>
                <td>8</td>
                <td>6</td>
                <td>7</td>
                <td>7.5</td>
              </tr><tr>
                <td>1</td>
                <td>CARLA</td>
                <td>MORALES</td>
                <td>0987654321</td>
                <td>10</td>
                <td>8</td>
                <td>9</td>
                <td>9.5</td>          
              </tr>
              <tr>
                <td>2</td>
                <td>JOSE</td>
                <td>ORELLANA</td>          
                <td>1234567890</td>
                <td>8</td>
                <td>6</td>
                <td>7</td>
                <td>7.5</td>
              </tr><tr>
                <td>1</td>
                <td>CARLA</td>
                <td>MORALES</td>
                <td>0987654321</td>
                <td>10</td>
                <td>8</td>
                <td>9</td>
                <td>9.5</td>          
              </tr>
              <tr>
                <td>2</td>
                <td>JOSE</td>
                <td>ORELLANA</td>          
                <td>1234567890</td>
                <td>8</td>
                <td>6</td>
                <td>7</td>
                <td>7.5</td>
              </tr><tr>
                <td>1</td>
                <td>CARLA</td>
                <td>MORALES</td>
                <td>0987654321</td>
                <td>10</td>
                <td>8</td>
                <td>9</td>
                <td>9.5</td>          
              </tr>
              <tr>
                <td>2</td>
                <td>JOSE</td>
                <td>ORELLANA</td>          
                <td>1234567890</td>
                <td>8</td>
                <td>6</td>
                <td>7</td>
                <td>7.5</td>
              </tr><tr>
                <td>1</td>
                <td>CARLA</td>
                <td>MORALES</td>
                <td>0987654321</td>
                <td>10</td>
                <td>8</td>
                <td>9</td>
                <td>9.5</td>          
              </tr>
              <tr>
                <td>2</td>
                <td>JOSE</td>
                <td>ORELLANA</td>          
                <td>1234567890</td>
                <td>8</td>
                <td>6</td>
                <td>7</td>
                <td>7.5</td>
              </tr><tr>
                <td>1</td>
                <td>CARLA</td>
                <td>MORALES</td>
                <td>0987654321</td>
                <td>10</td>
                <td>8</td>
                <td>9</td>
                <td>9.5</td>          
              </tr>
              <tr>
                <td>2</td>
                <td>JOSE</td>
                <td>ORELLANA</td>          
                <td>1234567890</td>
                <td>8</td>
                <td>6</td>
                <td>7</td>
                <td>7.5</td>
              </tr><tr>
                <td>1</td>
                <td>CARLA</td>
                <td>MORALES</td>
                <td>0987654321</td>
                <td>10</td>
                <td>8</td>
                <td>9</td>
                <td>9.5</td>          
              </tr>
              <tr>
                <td>2</td>
                <td>JOSE</td>
                <td>ORELLANA</td>          
                <td>1234567890</td>
                <td>8</td>
                <td>6</td>
                <td>7</td>
                <td>7.5</td>
              </tr><tr>
                <td>1</td>
                <td>CARLA</td>
                <td>MORALES</td>
                <td>0987654321</td>
                <td>10</td>
                <td>8</td>
                <td>9</td>
                <td>9.5</td>          
              </tr>
              <tr>
                <td>2</td>
                <td>JOSE</td>
                <td>ORELLANA</td>          
                <td>1234567890</td>
                <td>8</td>
                <td>6</td>
                <td>7</td>
                <td>7.5</td>
              </tr><tr>
                <td>1</td>
                <td>CARLA</td>
                <td>MORALES</td>
                <td>0987654321</td>
                <td>10</td>
                <td>8</td>
                <td>9</td>
                <td>9.5</td>          
              </tr>
              <tr>
                <td>2</td>
                <td>JOSE</td>
                <td>ORELLANA</td>          
                <td>1234567890</td>
                <td>8</td>
                <td>6</td>
                <td>7</td>
                <td>7.5</td>
              </tr><tr>
                <td>1</td>
                <td>CARLA</td>
                <td>MORALES</td>
                <td>0987654321</td>
                <td>10</td>
                <td>8</td>
                <td>9</td>
                <td>9.5</td>          
              </tr>
              <tr>
                <td>2</td>
                <td>JOSE</td>
                <td>ORELLANA</td>          
                <td>1234567890</td>
                <td>8</td>
                <td>6</td>
                <td>7</td>
                <td>7.5</td>
              </tr><tr>
                <td>1</td>
                <td>CARLA</td>
                <td>MORALES</td>
                <td>0987654321</td>
                <td>10</td>
                <td>8</td>
                <td>9</td>
                <td>9.5</td>          
              </tr>
              <tr>
                <td>2</td>
                <td>JOSE</td>
                <td>ORELLANA</td>          
                <td>1234567890</td>
                <td>8</td>
                <td>6</td>
                <td>7</td>
                <td>7.5</td>
              </tr><tr>
                <td>1</td>
                <td>CARLA</td>
                <td>MORALES</td>
                <td>0987654321</td>
                <td>10</td>
                <td>8</td>
                <td>9</td>
                <td>9.5</td>          
              </tr>
              <tr>
                <td>2</td>
                <td>JOSE</td>
                <td>ORELLANA</td>          
                <td>1234567890</td>
                <td>8</td>
                <td>6</td>
                <td>7</td>
                <td>7.5</td>
            </table>
          </div> 
        </section>
      </div>
      <div class="row">
        <footer class="page-footer col-md-12 col-sm-12">
          <a class="texto footer_a" href="/contactanos">CONTACTANOS</a>
          <p class="texto footer_p">Unidad Educativa Alfredo Veintimilla Moscozo © 2018. Todos los derechos reservados.</p>
        </footer>
      </div>
    </div>
  </body>
</html>
