<div id="contenido2">
          <h3>Datos Del Equipo De Computo</h3>
          <hr>
          <form enctype="multipart/form-data" action="" method="post">
              <div class="form-data">
                  <label>Serial</label>
              </div>
              <div class="form-data2">
                  <input type="text" onkeyup="Equipo()" class="form-group" name="serial" id="serial" required><font color="red">***</font><br>
              </div>
              <div class="form-data">
                <label>Marca</label>
              </div>
              <div class="form-data2">
                  <input type="text" class="form-group" name="marca" id="marca" required=""><br>
              </div>
              
              <div class="form-data">
                 <label>Tipo</label>
              </div>
              <div class="form-data2">
                  <select class="form-group" name="tipo" id="tipopc">
                    <option value="0">......Seleccionar.....</option>
                    <option value="1">Desktop</option>
                    <option valur="2">Laptop</option>
                </select><font color="red">***</font><br>
              </div>
              <div class="form-data">
                <label>Imagen</label>
              </div>
              <div class="form-data2">
                <input type="file" class="form-group" name="imagen_equ" id="imagen_equ" required=""><br>
              </div>
              <span id="equipo"></span>
              
              <div class="form-data">
                <label>Fecha Entrada</label>
              </div>
              <div class="form-data2">
                  <input type="date" class="form-group" name="fecha_entrada" id="fecha_entrada" required><font color="red">***</font><br>
              </div>
          </form>
          
      </div>
      <br>
      <div id="conten23b">
          <input type="submit" onclick="Registrar()" class="btn btn-sec" name="registrar" value="Realizar Registro"id="registar" >
      </div>