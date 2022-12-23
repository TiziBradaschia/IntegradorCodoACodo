<?php
require_once("/funciones/conexion.php");
require_once("/funciones/base.php");
$idCone = conectar();
$id = $_REQUEST['id'];

$Ok = eliminarOrador($idCone, $id);
header('Location:orador.php');
?>