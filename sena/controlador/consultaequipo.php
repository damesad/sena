<?php
include "../modelo/usuario.php";
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$serial=$_POST['serial'];
$clase=new Usuario();
if(mysqli_num_rows($clase->ConsultaEquipo($serial))> 0){

    echo "<center><font color='blue'>'el equipo ya se encuentra registrado'</font></center>";
}
else{
    ?>

<?php } ?>
