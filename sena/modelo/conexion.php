<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Conexion {

    public function EstablecerConexion(){
        $_conexion=  mysqli_connect("localhost", "root", "sena", "sena");
        if(!$_conexion){
            echo "no se ha podido establecer conexion con la base de datos" or die(mysqli_error($_conexion));
        }
        
        return $_conexion;
}

}
?>