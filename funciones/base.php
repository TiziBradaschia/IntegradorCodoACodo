<?php

function llenar_temas($idCone)
{
    $consultaR = "Select id,desc_tema from temas";
    $Sql = mysqli_query($idCone, $consultaR);
    return $Sql;
}
function cargarOrador($idCone, $nombre, $apellido, $tema, $descripcion)
{
    $Datos = "insert into oradores (nombre,apellido,tema,descripcion) values ('$nombre','$apellido','$tema','$descripcion')";
    if (!mysqli_query($idCone, $Datos)) {
        return false;
    } else {
        return true;
    }
}
