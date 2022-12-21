<?php
require_once("/funciones/conexion.php");
require_once("/funciones/base.php");
$idCone = conectar();
$nombre = $_REQUEST['nombre'];
$apellido = $_REQUEST['apellido'];
$tema = $_REQUEST['tema'];
$descripcion = $_REQUEST['descripcion'];
$Ok = cargarOrador($idCone, $nombre, $apellido, $tema, $descripcion);
?>
<html lang="es">
<head>
   <?php include('headConferencia.php'); ?>
   <title>Oradores</title>
</head>
<body>
   <header>
      <?php include('headerConferencia.php'); ?>
   </header>
   <div id="wrapper">
   <div id="page-wrapper">
	<div class="row">
		<div class="col-lg-12"><div class="tile"><h2 class="tile-title" ><font color="#85C1E9"><center><b>Nómina de Oradores</b></font></h2>  </div></div>
	</div> <!-- /.row  titulo--><br>
   <?php
 require_once 'funciones/base.php';
 $Listado=array();
 $Listado = ListarOradores($idCone);
 $CantidadOradores = count($Listado);
 ?>
 <div class="row">
 <div class="col-lg-2"></div>
 <div class="col-lg-8">
  <div class="table-responsive">
    <table class="table table-sm table-striped table-bordered bg-info">
      <thead>
       <tr class="bg-success">
        <th>Apellido y Nombre</th>
        <th>Tema</th>
        <th>Descripción</th>
        
        <th>Ver</th>
      <th>Editar</th>
      <th>Eliminar</th>
     </tr>
      </thead>
      <tbody>
<?php
     //Cargo a la tabla el listado de los oradores
      for($i=0; $i < $CantidadOradores; $i++)
       { 
?>
          <tr class="table-info">
          
          <td><?php echo $Listado[$i]['Apellido'].', '.$Listado[$i]['Nombre']; ?></td>
          <td><?php echo $Listado[$i]['Tema']; ?></td>
          <td><?php echo $Listado[$i]['Descripcion']; ?></td>
         
<?php
      echo'<td><a href=""><box-icon  name="show-alt"  size="sm" color="#005eff" animation="tada-hover"></box-icon><b></a></td> ';
         echo'<td><a href=""><box-icon  name="edit-alt" size="sm" color="#005eff" animation="tada-hover"></box-icon><b></a></td> ';
         echo'<td><form name="eliminar" method="post" action="index.php">'?><button class="btn btn-danger btn-circle" type="submit"  name="eliminar"  onclick="return confirm ('¿Seguro que desea eliminarlo?')"><box-icon  name="trash"  size="sm" color="white" animation="tada-hover"></box-icon></button></form></td>                      
          </tr> 
<?php 
      }
?>
      <tr>
       <td colspan="9" class="ultimatd bg-success"><b><a href="index.php#FormularioOrador"><box-icon  name="plus-circle" type="solid" size="sm"  color="#ffffff" animation="tada-hover"></box-icon> Registrar un orador</b></a></td>
      </tr>
                     
                     
                  
              
             </tbody>
           </table>
         </div><!-- fin tabla-->
      
     </div><!-- fin col tabla-->
    
     
   </div>
   </div>
   </div>


   <footer class="navbar navbar-expand-lg" id="foot">
      <?php include('footerConferencia.php'); ?>
   </footer>
</body>
</html>