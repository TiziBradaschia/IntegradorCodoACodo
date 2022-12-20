<?php
require_once("/funciones/conexion.php");
require_once("/funciones/base.php");
$idCone=conectar();
$nombre=$_REQUEST['nombre'];
$apellido=$_REQUEST['apellido'];
$tema=$_REQUEST['tema'];
$descripcion=$_REQUEST['descripcion'];

echo $apellido;
echo $nombre;
echo $tema;
echo $descripcion;

$Ok=cargarOrador($idCone,$nombre,$apellido,$tema,$descripcion);
if($Ok=='true'){
   echo('Registro exitoso');
}
else{
echo('No se pudo completar el registro');}
header ('Location:index.php');
exit;
?>


