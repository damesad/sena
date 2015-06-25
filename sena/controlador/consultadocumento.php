<?php
include "../modelo/usuario.php";
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$documento=$_POST['documento'];
$clase=new Usuario();
$var=$clase->ConsultaDocumento($documento);
if(mysqli_num_rows($var)> 0){
    
      while($row=mysqli_fetch_array($var)){
         echo $row['nombres_usu']."+".$row['apellidos_usu'];
      }      
}
else{
    


}
?>