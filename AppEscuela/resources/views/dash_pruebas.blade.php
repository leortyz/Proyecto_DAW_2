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
            <h2>Pruebas</h2>
          </div>
          <div class="row">           
           <button type="button" id="button_modificar" data-toggle="modal" data-target="#myModal1" disabled>MODIFICAR</button>
           <button type="button" id="button_eliminar" data-toggle="modal" data-target="#myModal2" disabled>ELIMINAR</button> 
            <!-- Modal -->
            <div class="modal fade" id="myModal1" role="dialog">
              <div class="modal-dialog">          
                <!-- Modal content-->
                <div class="modal-content">                  
                  <div class="modal-body">                    
                    <p>Está segura de modificar la fecha de la prueba?</p>
                    <form action="/dash-pruebas/actualizacion" method="POST">
                      @csrf
                      {{ method_field('PUT') }}
                      <input type="text" id="input_idPruebaM" name="idPrueba" value="">
                      <input type="date" id="input_fecha" name="fecha" value="">
                      <div>
                        <button type="submit">ACEPTAR</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">CANCELAR</button>
                      </div>
                    </form>                    
                  </div>              
                </div>            
              </div>
            </div> 
            <!-- Modal -->
            <div class="modal fade" id="myModal2" role="dialog">
              <div class="modal-dialog">          
                <!-- Modal content-->
                <div class="modal-content">                  
                  <div class="modal-body">                    
                    <p>Está segura de eliminar la prueba?</p>
                    <form action="/dash-pruebas/eliminacion" method="POST">
                      @csrf
                      {{ method_field('DELETE') }}
                      <input type="text" id="input_idPruebaE" name="idPrueba" value="">                      
                      <div>
                        <button type="submit">ACEPTAR</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">CANCELAR</button>
                      </div>
                    </form>                    
                  </div>              
                </div>            
              </div>
            </div> 
          </div>
          <div class="row">
            <table>
              <thead>
                <tr>
                  <th>HABILITAR</th>
                  <th>CURSO</th>
                  <th>MATERIA</th>
                  <th>TIPO</th>
                  <th>PERIODO</th>
                  <th>FECHA</th>
                  <th>CALIFICACION</th>                  
                </tr>
              </thead>
              <tbody>
                @foreach ($pruebas as $prueba)
                <tr>
                  <td><input type="checkbox" name="" value="{{$prueba->id}}" onchange="habilitar($(this),this.checked)"></td>
                  <td>{{$prueba->anio}} {{$prueba->paralelo}}</td>
                  <td>{{$prueba->nombre}}</td>
                  <td>{{$prueba->tipo}}</td>
                  <td>{{$prueba->periodo}}</td>
                  <td><input type="date" id="input_date{{$prueba->id}}" name="" value="{{$prueba->fecha}}" disabled></td>
                  <td>{{$prueba->calificacion}}</td>                           
                </tr>
                @endforeach
              </tbody>
            </table>            
          </div>
          <div class="row">
            <div class="col-md-12 col-sm-12 btn-group">            
              <button type="button" class="col-md-4 col-sm-12 boton_ing_notas btn btn-primary" data-toggle="modal" data-target="#myModal">CREAR</button>
            </div>      
            <!-- Modal -->
            <div class="modal fade" id="myModal" role="dialog">
              <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">                    
                  <div class="modal-body">
                    <form action="/dash-pruebas/creacion" method="POST" accept-charset="utf-8">
                        @csrf
                        <input type="text" name="idProfesor" value="{{$id}}" hidden>
                        <div class="form-group">
                          <label for="exampleFormControlSelect1">CURSO</label>
                          <select class="form-control" id="id_select_cursos" name="idCurso">
                            <option value="">Seleccion el curso ...</option>}                            
                            @foreach ($cursos as $curso)
                              <option value="{{$curso->idCurso}}">{{$curso->anio}} {{$curso->paralelo}}</option>
                            @endforeach
                          </select>
                        </div>
                        <div class="form-group">
                          <label for="exampleFormControlSelect1">MATERIA</label>
                          <select class="form-control" id="id_select_materias" name="idMateria">
                            <option value="">Seleccion la materia ...</option>}
                            option
                            @foreach ($materias as $materia)
                              <option value="{{$materia->idMateria}}:{{$materia->idCurso}}">{{$materia->nombre}}</option>
                            @endforeach
                          </select>
                        </div>
                        <div class="form-group">
                          <label for="exampleFormControlSelect1">TIPO PRUEBA</label>
                          <select class="form-control" id="exampleFormControlSelect1" name="tipo">
                            <option value="LECCION">LECCION</option>
                            <option value="EXAMEN">EXAMEN</option>                              
                          </select>
                        </div>
                        <div class="form-group">
                          <label for="exampleFormControlSelect1">PERIODO PRUEBA</label>
                          <select class="form-control" id="exampleFormControlSelect1" name="periodo">
                            <option value="1 QUIMESTRE">1 QUIMESTRE</option>
                            <option value="2 QUIMESTRE">2 QUIMISTRE</option>
                          </select>
                        </div>
                        <div class="form-group">
                          <label for="exampleFormControlInput1">FECHA</label>
                          <input type="date" class="form-control" id="exampleFormControlInput1" name="fecha">
                        </div>
                        <div class="form-group">
                          <label for="exampleFormControlInput1">CALIFICACION</label>
                          <input type="number" class="form-control" id="exampleFormControlInput1" min="0" max="10" placeholder="0" name="calificacion">
                        </div>
                        <div class="col-md-12 col-sm-12 btn-group">
                          <button type="submit" class="btn btn-primary">ACEPTAR</button>
                          <button type="button" class="btn btn-primary" data-dismiss="modal">CERRAR</button>      
                        </div>
                    </form>
                  </div>                    
                </div>                
              </div>
            </div>  
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
  <script type="text/javascript">
    $(document).ready(function(){
      $('#id_select_materias option').each(function(){
        $(this).hide();
      });

      $('#id_select_cursos').change(function() {
        var value_cursos = $('#id_select_cursos').val();
        console.log(value_cursos);
        $('#id_select_materias option').each(function(){
          var valueOption = $(this).val();
          console.log(valueOption);
          var idCurso = parseInt(valueOption.split(':')[1]);
          if(value_cursos==idCurso){
            $(this).show();
          }else{
            $(this).hide();
          }
        });
      });

      $('#button_modificar').click(function() {
        var id = document.getElementById('input_idPruebaM').value;
        console.log(id);
        document.getElementById('input_fecha').value = document.getElementById('input_date'+id).value;
      });

    });
  </script> 
  <script type="text/javascript">
    function habilitar(box, value){
      var idPrueba = box.val();
      console.log(idPrueba);
      if(value){
        console.log('entra a check');
        document.getElementById('input_idPruebaM').value = idPrueba;
        document.getElementById('input_idPruebaE').value = idPrueba;
        document.getElementById('input_date'+idPrueba).disabled = false;
        document.getElementById('button_modificar').disabled = false;
        document.getElementById('button_eliminar').disabled = false;
      }else{
        document.getElementById('input_idPruebaM').value = '';
        document.getElementById('input_idPruebaE').value = '';
        console.log('entra a no check');
        document.getElementById('input_date'+idPrueba).disabled = true;
        document.getElementById('button_modificar').disabled = true;
        document.getElementById('button_eliminar').disabled = true;
      }
    };
  </script>
</html>