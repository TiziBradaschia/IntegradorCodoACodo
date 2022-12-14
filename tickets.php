<!DOCTYPE html>
<html lang="es">
<head>
<?php include('headConferencia.php');?>
  <title>Tickets</title>
</head>
<body>
  <!--Comienzo de cabecera-->
  <header>

    <?php include('headerConferencia.php'); ?>
  </header>
  
  <!--Comienzo de tarjetas-->
<div class="container">
<div class="cartas">
 <div class="row">
  <div class="col-xs-12 col-sm-1 col-md-1 col-lg-1"></div>
  <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
    <div class="card cartaEstudiante">
			<div class="card-body">
        <h5 class="card-title">Estudiante</h5>
        <p class="card-text">Tiene un descuento</p>
        <b>80%</b> <br><small>*presentar documentación</small>
      </div>
    </div>
  </div>
  <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
  	<div class="card cartaTrainee">
			<div class="card-body">
        <h5 class="card-title">Trainee</h5>
        <p class="card-text">Tiene un descuento</p>
        <b>50%</b> <br><small>*presentar documentación</small>
      </div>
    </div>
  </div>
	<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
    <div class="card cartaJunior">
			<div class="card-body">
        <h5 class="card-title">Junior</h5>
        <p class="card-text">Tiene un descuento</p>
        <b>15%</b> <br><small>*presentar documentación</small>
      </div>
    </div>
  </div>
</div>
</div><!--fin cartas-->
<!--Comienzo input-->
<div class="row">
	<p>Venta</p>
</div>
<div class="row">
  <h1>VALOR DE TICKET $200</h1>
</div>
<div class="row">
  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
    <input class="form-control" type="text" placeholder="Ingrese el Nombre" id="nombre"><p class="especial" id="msjNombre"></p>
  </div>
  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
    <input class="form-control" type="text" placeholder="Ingrese el Apellido" id="apellido"><p class="especial" id="msjApellido"></p>
  </div>
</div>
<div class="row">
  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <input class="form-control" type="mail" placeholder="Ingrese el E-Mail" id="mail"><p class="especial" id="msjMail"></p>
  </div>
</div>
<div class="row">
  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
    <label>Cantidad</label>
		<input class="form-control" type="text" placeholder="Ingrese una cantidad"id="cantidad"><p class="especial" id="msjCantidad"></p>
  </div>
  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
    <label>Categoría</label>
    <div class="dropdown-list">
      <select name="categoria" id="categoria">
        <option value="1">Estudiante</option>
        <option value="2">Trainee</option>
        <option value="3">Junior</option>
        <option value="">General</option>
			</select>
    </div>
  </div>
</div>
<div class="row">
	<div class="alert alert-secondary" role="alert">
    <b> Total a pagar: $</b><span id="total" class="align-middle"></span>
  </div>
</div>

<!--Comienzo de botones-->
<div class="row lineaBotones" >
	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4" aling="center"></div>
  <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 mx-center" aling="center">
    <button type="button" class="btn btn-danger btn-lg " id="btnBorrar" onclick="limpiarTodo();">Borrar</button>
  </div>
	<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 mx-center"aling="center">
    <button type="button" class="btn btn-success btn-lg" id="btnResumen" onclick="validaciones();">Resumen</button>
  </div>
</div>
</div> <!--fin conteiner-->
<!--Comienzo de pie-->
<footer class="navbar navbar-expand-lg" id="foot" >
<?php include('footerConferencia.php');?>
 </footer>
  <!--Script-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
    crossorigin="anonymous"></script>
	
  <script src="scripts.js"></script>

</body>
</html>