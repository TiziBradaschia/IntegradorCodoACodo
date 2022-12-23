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



function ListarOradores($idCone)
{
    $Sql = "Select o.id,o.nombre,o.apellido,t.desc_tema,o.descripcion
    from oradores as o
    inner join temas as t on t.id=o.tema
    order by t.desc_tema asc";

    $Lista = mysqli_query($idCone, $Sql);
    $Listado = array();
    $i = 0;
    while ($Fila = mysqli_fetch_array($Lista)) {
        $Listado[$i]['Nombre'] = $Fila['nombre'];
        $Listado[$i]['id'] = $Fila['id'];
        $Listado[$i]['Apellido'] = $Fila['apellido'];
        $Listado[$i]['Tema'] = $Fila['desc_tema'];
        $Listado[$i]['Descripcion'] = $Fila['descripcion'];
        $i++;
    }

    return $Listado;
}
function BuscarOrador($idCone,$id)
{
    $Sql = "Select o.id,o.nombre,o.apellido,t.desc_tema,o.tema,o.descripcion
    from oradores as o
    inner join temas as t on t.id=o.tema
    where o.id=$id
    order by t.desc_tema asc";

    $Lista = mysqli_query($idCone, $Sql);
    $Fila = mysqli_fetch_array($Lista);
    
    return $Fila;
}
function eliminarorador($idCone,$id){
    $Datos = "delete from oradores where id='$id'";
    if (!mysqli_query($idCone, $Datos)) {
        return false;
    } else {
        return true;
    }
}
function modificarorador($idCone,$id,$idTema,$nombre,$apellido,$descripcion){
    $Datos = "update oradores set nombre='$nombre',apellido='$apellido',tema='$idTema',descripcion='$descripcion' where id='$id'";
    mysqli_query($idCone, $Datos);
  
}

/*tizib 522h4=S!1|d~FipJ*/