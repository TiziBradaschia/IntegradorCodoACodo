<?php
function conectar()
{
    $host = "localhost";
    $usuario = "root";
    $clave = "";
    $BaseDeDato = "codoacodophp";

    $idCone = mysqli_connect($host, $usuario, $clave, $BaseDeDato);
    if ($idCone != false)
        return $idCone;
    else
        die('No se pudo establecer la conexión.');
    return $idCone;
}
