<?php
include "../modelo/usuario.php";
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$documento=$_POST['documento'];

$serial=$_POST['serial'];

$fecha=$_POST['fecha_entrada'];
$clase=new Usuario();
if(empty($_POST['nombres']) && empty($_POST['apellidos']) && empty($_POST['tipousu']) && empty($_POST['imagen_usu'])
        empty($_POST['marca']) && empty($_POST['tipopc']) && empty($_POST['marca']) && empty($_POST['image_equ'])){
  
    if($clase->InsertarRegistro($documento,$serial,$fecha)){
        echo"se registro Correctamente";
    }else{
        echo "No se ha podido registrar verifique e intentelo de nuevo";
    }
}
else{
        if(empty($_POST['nombres']) && empty($_POST['apellidos']) && empty($_POST['tipousu']) && empty($_POST['imagen_usu'])){
          $marca=$_POST['marca'];
          $tipopc=$_POST['tipopc'];
            ECHO "EQUIPO";
          
        }
        else{
            if(empty($_POST['marca']) && empty($_POST['tipopc']) && empty($_POST['marca']) && empty($_POST['image_equ'])){
                   ECHO "USUARIO";
                $nombres=$_POST['nombres'];
$apellidos=$_POST['apellidos'];
$tipousu=$_POST['tipousu'];
             }
             else{
                    ECHO "TODO";
              }
        }
}
?>