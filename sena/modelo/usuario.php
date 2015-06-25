<?php
include "conexion.php";
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Usuario extends Conexion{
    private $_documento;
    private $_serial;
    private $_conexion;
            function __construct() {
        $this->_conexion= new Conexion();
    }
    
    public function InsertarUsuario($documento,$nombre,$apellido,$tipo,$imagen) {
        $this->_documento=$documento;
        $conexion=$this->_conexion->EstablecerConexion();
        $sql="INSERT INTO usuario(documento_usu,nombres_usu,apellidos_usu,tipo_usu,imagen_usu)VALUES('$documento','$nombre','$apellido','$tipo','$imagen')";
        $query=  mysqli_query($conexion, $sql)or die(mysqli_error($conexion));
        return $query;
    }
    public function InsertarEquipo($serial,$marca,$tipo,$imagen) {
        
        $conexion=$this->_conexion->EstablecerConexion();
        $sql="INSERT INTO equipo(serial_equ,marca_equ,tipo_equ,imagen_equ)VALUES('$serial','$marca','$tipo','$imagen')";
        $query=  mysqli_query($conexion, $sql)or die(mysqli_error($conexion));
        return $query;
    }
    public function InsertarRegistro($documento,$serial,$fecha_entrada) {
        $conexion=$this->_conexion->EstablecerConexion();
        $sql="INSERT INTO registro(documento_usu,serial_equ,fecha_entrada,hora)VALUES('$documento','$serial','$fecha_entrada','06:10:25')";
        $query=  mysqli_query($conexion, $sql)or die(mysqli_error($conexion));
        return $query;
    }
     public function ActividadesDiarias($fecha) {
         $conexion=$this->_conexion->EstablecerConexion();
        $sql="SELECT COUNT(DISTINCT `documento_usu`) FROM registro WHERE `fecha_entrada`='2015-06-15 05:21:00'";
        $query=  mysqli_query($conexion, $sql)or die(mysqli_error($conexion));
        return $query;
    }
    public function ConsultaDeterminada($documento){
        $conexion=$this->_conexion->EstablecerConexion();
        $sql="SELECT documento_usu,nombre_usu,apellido_usu,serial_equ,marca_equ,tipo_equ FROM usuario,registro,equipo WHERE registro.documento_usu='$documento' AND registro.documento_usu=usuario.documento_usu AND registro.serial_equ=equipo.serial_equ";
        $query=  mysqli_query($conexion, $sql)or die(mysqli_error($conexion));
        return $query;
    }
    public function EstadoEquipo($serial){
        $conexion=$this->_conexion->EstablecerConexion();
        $sql="SELECT * FROM registro,usuario WHERE serial_equ='$serial' AND registro.documento_usu=usuario.documento_usu ORDER BY registro.fecha_entrada DESC LIMIT 0,1";
        $query=  mysqli_query($conexion, $sql)or die(mysqli_error($conexion));
        return $query;
        
    }
    public function ConsultaDocumento($documento){
        $conexion=$this->_conexion->EstablecerConexion();
        $sql="SELECT * FROM usuario WHERE documento_usu='$documento'";
        $query=  mysqli_query($conexion, $sql)or die(mysqli_error($conexion));
        return $query;
    }
    public function ConsultaEquipo($serial){
        $conexion=$this->_conexion->EstablecerConexion();
        $sql="SELECT serial_equ FROM equipo WHERE serial_equ='$serial'";
        $query=  mysqli_query($conexion, $sql)or die(mysqli_error($conexion));
        return $query;
    }
     public function DarSalida($serial,$fecha){
        $conexion=$this->_conexion->EstablecerConexion();
        $sql="SELECT serial_equ FROM registro WHERE serial_equ='$serial' AND fecha_salida=''";
        $query=  mysqli_query($conexion, $sql)or die(mysqli_error($conexion));
        
        if(mysqli_num_rows($query) != 0) {
            while ($row = mysqli_fetch_array($query)) {
                $id=$row['cod_reg'];
            }
            $sql="UPDATE registro SET fecha_salida='$fecha' WHERE cod_reg='$id'";
            $query=  mysqli_query($conexion, $sql)or die(mysqli_error($conexion));
            
        }else{
            $query= "no se ha encontrado este equipo";
        }
        return $query;
        
    }
    
   
    
 }
       
?>
