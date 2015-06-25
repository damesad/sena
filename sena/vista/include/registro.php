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
      