<?php
require_once("/funciones/conexion.php");
$idCone = conectar();
require_once("/funciones/base.php");
if (!empty($_POST['btnOrador'])) {
 /* cargarOrador($idCone, $_POST['nombre'], $_POST['apellido'], $_POST['tema'], $_POST['descripcion']);
   $MensajeError = ValidarDatos();
    if (empty($MensajeError))
    {
        if (InsertarSolicitud($MiConexion, $_SESSION['Usuario_Id']) != false)
        {
            $MensajeOK = 'Registro almacenado!';
            $_POST = array();
        }
    }*/
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <?php include('headConferencia.php'); ?>
  <title>Integrador Tizi</title>
</head>

<body>
  <header>
    <?php include('headerConferencia.php'); ?>
  </header>
  <section class="comprar" id="comprar">
    <div class="cajaConf">
      <img src="imagenes/ba1.jpg" class="img-fluid" alt="Imagen principal">
      <div class="conf" id="conferenciaBsAs">
        <h1>Conf Bs As</h1>
        <p><b>Bs As llega por primera vez a la Argentina. Un evento para compartir con <br> nuestra comunidad el conocimiento y experiencia de los expertos que <br> estan creando el futuro de internet. Ven a conocer a miembros del <br> evento, a otros estudiantes de Codo a Codo y los oradores de primer <br> nivel que tenemos para ti. Te esperamos!</p>
        <a class="linkOrador" id="serOrador" href="#FormularioOrador">Quiero ser orador</a></b>
        <!--<form method="POST" action="tickets.html"> dejo alternativa js, funcionan ambas-->
        <button type="submit" class="btn btn-success" onclick="redireccion()"> <box-icon  name="cart-add" type="solid" size="sm" color="#FFF" animation="tada"></box-icon>  Comprar tickets</button>
        <!--</form>-->
      </div>
    </div>
  </section>
  <section id="oradores">
    <h6> Conozca a los </h6>
    <h3> ORADORES </h3>
    <div class="contenedorOradores">
      <div class="row colOrador">
        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
          <div class="card h-100">
            <img src="imagenes/steve.jpg" class="card-img-top" alt="foto Steve Jobs">
            <div class="card-body">
              <span class="badge text-bg-warning">Warning</span>
              <span class="badge text-bg-info">Info</span>
              <h5 class="card-title">Steve Jobs</h5>
              <p class="card-text orador">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Deleniti..</p>
            </div>
          </div>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
          <div class="card h-100">
            <img src="imagenes/bill.jpg" class="card-img-top" alt="foto Bill Gates">
            <div class="card-body">
              <span class="badge text-bg-warning">Warning</span>
              <span class="badge text-bg-info">Info</span>
              <h5 class="card-title">Bill Gates</h5>
              <p class="card-text orador">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor.</p>
            </div>
          </div>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
          <div class="card h-100">
            <img src="imagenes/ada.jpeg" class="card-img-top" alt="foto Ada Lovelace">
            <div class="card-body">
              <span class="badge text-bg-secondary">Secondary</span>
              <span class="badge text-bg-danger">Info</span>
              <h5 class="card-title">Ada Lovelace</h5>
              <p class="card-text orador">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Error animi ad.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--fin contenedor-->
  </section>
  <section id="imgPlaya">
    <div class="card h-100">
      <div class="row ">
        <div class="col-md-6 imagenPlaya">
          <img src="imagenes/honolulu.jpg" class="img-fluid rounded-start" alt="imagen Honolulu">
        </div>
        <div class="col-md-6 bg-dark textoPlaya">
          <div class="card-body-text-imgPlaya">
            <h5 class="card-title">Bs As - Octubre</h5>
            <p class="card-text-imgPlaya">Buenos Aires es la provincia y localidad mas grande del estado de Argentina. <br>En los Estados Unidos, Honolulu es la mas sureña de entre las principales ciudades estadounidenses. Aunque el nombre de Honolulu se refiere al área urbana en la costa sureste de la isla de Oahu, la ciudad y el condado de Honolulu han formado una ciudad- condado consolidada sobre toda la ciudad (aproximadamente 600 km² de superficie).</p>

            <button type="button" class="btn  btn-outline-light"><box-icon  name="search-alt" type="solid" size="sm" color="#FFF" animation="tada"></box-icon>  Conocé más</button>
          </div>
        </div>
      </div>
    </div>
  </section>
  </div>
  <section id="FormularioOrador">
    <div class="contenedorFormulario">
   
        <h6> CONVIÉRTETE EN UN <b>ORADOR</b></h6>
        <br>
        <h6>Anótate como orador para dar una charla. ¡Cuéntanos de qué quieres hablar!</h6>
        <form action="orador.php" method="post">
          <div class="row">
            <div class="col mb-3">
              <input type="text" class="form-control" placeholder="Nombre"  name="nombre" id="nombreParaSerOrador" value="<?php echo !empty($_POS['nombre']) ? $_POST['nombre'] : ''; ?>" required>
              <p class="especial" id="msjNombre"></p>
            </div>
            <div class="col">
              <input type="text" class="form-control" placeholder="Apellido"  name="apellido" value="<?php echo !empty($_POS['apellido']) ? $_POST['apellido'] : ''; ?>"required>
              <p class="especial" id="msjApellido"></p>
            </div>
          </div>
          <div class="row">
            <div class="mb-3">
              <input type="text" class="form-control" name="descripcion" id="descripcion" required placeholder="¿Sobre qué quieres hablar?" value="<?php echo !empty($_POS['descripcion']) ? $_POST['descripcion'] : ''; ?>"required>
              <p class="especial" id="msjDescripcion"></p>
              <p class="recuerda"><b>(Recuerda incluir un título para tu charla)</b></p>
            </div>
          </div>
          <div class="row select">
            <div class="col-lg-12">
              <label><b>Seleccione el tema</b></label>
              <select class="form-select" aria-label="Default select example" name="tema" id="tema">
                
                <?php
                $Sql = llenar_temas($idCone);
                while ($Fila = mysqli_fetch_array($Sql)) {
                  $RC = $Fila['id'];
                  $RN = $Fila['desc_tema'];
                  echo "<Option value='$RC'>$RN</Option>";
                }
                mysqli_close($idCone);
                ?>
              </select>
              <p class="especial" id="msjTema"></p>
            </div>
          </div>
          <div class="d-grid gap-12">
            <button class="btn btn-lg btn-block buttonFormulario" name="btnOrador" type="submit" onclick="validar_campos_orador()"><box-icon  name="like" type="solid" size="sm" color="#44F814" animation="spin"></box-icon>   Enviar</button>
          </div>
        </form>
      </div>
  </section>
  <footer class="navbar navbar-expand-lg" id="foot" >
<?php include('footerConferencia.php');?>
 </footer>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  <script scr="scripts.js">
    function redireccion() {
      window.location.href = "tickets.php";
    }
  </script>
</body>

</html>