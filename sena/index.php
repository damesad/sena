<!doctype html>
<!--[if lt IE 7]> <html class="ie6 oldie"> <![endif]-->
<!--[if IE 7]>    <html class="ie7 oldie"> <![endif]-->
<!--[if IE 8]>    <html class="ie8 oldie"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="">
<!--<![endif]-->
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Sena</title>
<link href="vista/css/boilerplate.css" rel="stylesheet" type="text/css">
<link href="vista/css/style.css" rel="stylesheet" type="text/css">
<!-- 
Para obtener más información sobre los comentarios condicionales situados alrededor de las etiquetas html en la parte superior del archivo:
paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/
  
Haga lo siguiente si usa su compilación personalizada de modernizr (http://www.modernizr.com/):
* inserte el vínculo del código js aquí
* elimine el vínculo situado debajo para html5shiv
* añada la clase "no-js" a las etiquetas html en la parte superior
* también puede eliminar el vínculo con respond.min.js si ha incluido MQ Polyfill en su compilación de modernizr 
-->
<!--[if lt IE 9]>
<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

</head>
<body>
<div class="gridContainer clearfix">
    <div id="header">
        <img class="logo" src="vista/img/logo.png">
        <h1>Sistema De Control De Equipos De Computo</h1>
        <h2>SENA-Norte De Santander</h2>
        
    </div>
  <div id="nav">
        <button  onclick="load_page('vista/include/registro')" class="btn btn-nav" name="registro" id="registro" >Registro</button>
        <button  onclick="load_page('vista/include/consolidado')" class="btn btn-nav" name="consolidado" id="consolidado">Consolidado De Actividades</button>
        <button  onclick="load_page('vista/include/consulta')" class="btn btn-nav" name="consulta" id="consulta" >Consulta Determinada De Un Usuario</button>
        <button  onclick="load_page('vista/include/estado')" class="btn btn-nav" name="estado" id="estado" >Estado Actual De Un Equipo</button>
        
  </div>
    
  <div id="content">
      <h2>Digite La Informacion En Los Siguientes Formularios</h2>
      <div id="contenido1">
          <h3>Datos Del Usuario</h3>
          <hr>
          <form enctype="multipart/form-data" action="" method="post">
              
              <div class="form-data">
                  
                  <label>Documento de identidad</label>
              </div>
              
              <div class="form-data2">
                  <input type="number" class="form-group"  name="documento" id="documento" required><font color="red">***</font><br>
              </div>
              <div class="form-data">
                <label>Nombres</label>
              </div>
              <div class="form-data2">
                  <input type="text" class="form-group" onclick="Documento()"name="nombres" id="nombres" required><font color="red">***</font><br>
              </div>
              <div class="form-data">
                    <label>Apellidos</label>
              </div>
              <div class="form-data2">
                  <input type="text" class="form-group" name="apellidos" id="apellidos" required=""><br>
              </div>
              <div class="form-data">
                 <label>Tipo</label>
              </div>
              <div class="form-data2">
                  <select class="form-group" name="tipousu" id="tipousu">
                    <option value="0">......Seleccionar.....</option>
                    <option value="1">Visitante</option>
                    <option valur="2">Usuario Sena</option>
                </select><font color="red">***</font><br>
              </div>
              <div class="form-data">
                <label>Imagen</label>
              </div>
              <div class="form-data2">
                <input type="file" class="form-group" name="imagen_usu" id="imagen_usu" required=""><br>
              </div>
              <br>
              <span id="document">
          </span>
              
          </form>
          <button onclick="load_page3('vista/include/formulario2')" class="btn btn-sec" name="registrar" id="registar" >siguiente</button>
      </div>
      
      
  </div>
  
    
  
  <div id="sesion"><a href="http://www.senasofiaplus.edu.co/"><img src="vista/img/footerlogo.png"></a><a href="http://www.mintrabajo.gov.co/"><img src="vista/img/footerlogo2.png"></a></div>
  <div id="footer"><p>politicas de seguridad Sena
          copyrigth-danny rojas-2015<p></div>
</div>
    <script type="text/javascript" src="vista/js/respond.min.js"></script>
    <script type="text/javascript" src="vista/js/jquery-1.11.3.min.js"></script>
    <script type="text/javascript">
        function load_page(argument) {

            $.get(argument+".php").done(
                 function(data){
                     $(dom('content')).html(data);
                     //animate(objDOM);
                 });
         }

         function dom (argument) {
             return document.getElementById(argument);
         }
         function load_page3(argument) {

            $.get(argument+".php").done(
                 function(data){
                     $(dom('contenido1')).html(data);
                     //animate(objDOM);
                 });
         }

         function dom (argument) {
             return document.getElementById(argument);
         }
         function Documento(){
             var x=$('#documento').val();
             var parametros={"documento":x};
             $.ajax({
                 data:parametros,
                 url:"controlador/consultadocumento.php",
                 type:"POST",
                 
                 beforeSend : function(){
                     document.getElementById('document').innerHTML="validando";
                     
                 },
                 success:function(response){
                     var print=response;
                     var arreglo = print.split('+');
                     document.getElementById('nombres').value=arreglo[0];
                     document.getElementById('apellidos').value=arreglo[1];
                     
                     console.log(response);
                 }
             });
         }
        function Equipo(){
             var x=$('#serial').val();
             var parametros={"serial":x};
             $.ajax({
                 data:parametros,
                 url:"controlador/consultaequipo.php",
                 type:"POST",
                 
                 beforeSend : function(){
                     document.getElementById('equipo').innerHTML="validando";
                     
                 },
                 success:function(response){
                     document.getElementById('equipo').innerHTML=response;
                     console.log(response);
                 }
             });
         }
         function Registrar(){
             var x=$('#documento').val();
             var y=$('#serial').val();
             var z=$('#fecha_entrada').val();
             var a=$('#nombres').val();
             var b=$('#apellidos').val();
             var c=$('#tipousu').val();
             var d=$('#imagen_usu').val();
             var e=$('#marca').val();
             var f=$('#tipopc').val();
             var parametros={"documento":x,"serial":y,"fecha_entrada":z,"nombres":a,"apellidos":b,"tipousu":c,"imagen_usu":d,"marca":e,"tipopc":f};
              $.ajax({
                 data:parametros,
                 url:"controlador/register.php",
                 type:"POST",
                 
                 beforeSend : function(){
                     document.getElementById('registros').innerHTML=alert('validando');
                     
                 },
                 success:function(response){
                     document.getElementById('registros').innerHTML=alert(response),window.location='index.php';
                     console.log(response);
                 }
             });
         }
    </script>
</body>
</html>
