<?php
require_once("/funciones/conexion.php");
require_once("/funciones/base.php");
$idCone = conectar();
$nombre = $_REQUEST['nombre'];
$apellido = $_REQUEST['apellido'];
$tema = $_REQUEST['tema'];
$descripcion = $_REQUEST['descripcion'];
$Ok = cargarOrador($idCone, $nombre, $apellido, $tema, $descripcion);
header('Location:orador.php');
?>