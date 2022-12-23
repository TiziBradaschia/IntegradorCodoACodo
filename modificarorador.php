<?php
require_once("/funciones/conexion.php");
require_once("/funciones/base.php");
$idCone = conectar();
$id=$_REQUEST['id'];
$Listado=array();
$Listado = BuscarOrador($idCone,$id);


    $nombre= $Listado['nombre'];
    $apellido= $Listado['apellido'];
    $tema= $Listado['desc_tema'];
    $idtema= $Listado['tema'];
    $descripcion= $Listado['descripcion'];
 

              
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
   
<section id="FormularioOrador">
    <div class="contenedorFormulario">
   
        <h6> MODIFICA UN <b>ORADOR</b></h6>
       
        <br>
       
        <form action="modificaroradorbase.php" method="post">
          <div class="row">
            <div class="col mb-3">
              <input type="text" class="form-control" placeholder="Nombre"  name="nombre" id="nombreParaSerOrador" value="<?php echo $nombre; ?>" required>
              <input type="hidden" name="id" value="<?php echo $id; ?>">
              <p class="especial" id="msjNombre"></p>
            </div>
            <div class="col">
              <input type="text" class="form-control" placeholder="Apellido"  name="apellido" value="<?php echo $apellido; ?>"required>
              <p class="especial" id="msjApellido"></p>
            </div>
          </div>
          <div class="row">
            <div class="mb-3">
              <input type="text" class="form-control" name="descripcion" id="descripcion" required placeholder="¿Sobre qué quieres hablar?" value="<?php echo $descripcion;?>"required>
              <p class="especial" id="msjDescripcion"></p>
              <p class="recuerda"><b>(Recuerda incluir un título para tu charla)</b></p>
            </div>
          </div>
          <div class="row select">
            <div class="col-lg-12">
              <label><b>Seleccione el tema</b></label>
              <select class="form-select" aria-label="Default select example" name="tema" id="tema">
                
                <?php
                $Sql1 = llenar_temas($idCone);
                while ($Fila = mysqli_fetch_array($Sql1)) {
                  
                  $RC = $Fila['id'];
                  $RN = $Fila['desc_tema'];
                  if($idtema==$RC) {
                    echo "<Option value='$RC' selected>$RN</Option>";
                  }else{
                    echo "<Option value='$RC'>$RN</Option>";
                  }

                 
                }
                mysqli_close($idCone);
                ?>
              </select>
              <p class="especial" id="msjTema"></p>
            </div>
          </div>
          <div class="d-grid gap-12">
            <button class="btn btn-lg btn-block buttonFormulario" name="btnOrador" type="submit" onclick="return confirm ('¿Seguro que desea modificarlo?')"><box-icon  name="like" type="solid" size="sm" color="#44F814" animation="spin"></box-icon>   Modificar</button>
          </div>
        </form>
      </div>
  </section>

   <footer class="navbar navbar-expand-lg" id="foot">
      <?php include('footerConferencia.php'); ?>
   </footer>
</body>
</html>