<?php
require_once("/funciones/conexion.php");
require_once("/funciones/base.php");
$idCone = conectar();
$id = $_REQUEST['id'];
$nombre = $_REQUEST['nombre'];
$apellido = $_REQUEST['apellido'];
$idTema = $_REQUEST['tema'];
$descripcion = $_REQUEST['descripcion'];
$Ok = modificarorador($idCone,$id,$idTema,$nombre,$apellido,$descripcion);
header('Location:orador.php');
?>