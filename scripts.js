const nombre = document.getElementById("nombre");
const msjNombre = document.getElementById("msjNombre");
const apellido = document.getElementById("apellido");
const msjApellido = document.getElementById("msjApellido");
const mail = document.getElementById("mail");
const msjMail = document.getElementById("msjMail");
const expRegular = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/;
const cantidad = document.getElementById("cantidad");
const msjCantidad = document.getElementById("msjCantidad");
const categoria = document.getElementById("categoria");
const msjCategoria = document.getElementById("msjCategoria");
const btnResumen = document.getElementById("btnResumen");

/*Validación del nombre*/
function validarNombre() {
  if (nombre.value.length < 1) {
    msjNombre.innerHTML = "Nombre invalido";
  } else {
    return 0;
  }
}
/*Validación del apellido*/
function validarApellido() {
  if (apellido.value.length < 2) {
    msjApellido.innerHTML = "Apellido invalido";
  } else {
    return 0;
  }
}
/*Validación del mail*/
function validarMail() {
  if (!expRegular.test(mail.value)) {
    msjMail.innerHTML = "E-mail invalido";
  } else {
    return 0;
  }
}
/*Validación de la cantidad*/

function validarCantidad() {
  if (cantidad.value < 1) {
    msjCantidad.innerHTML = "¿Qué cantidad?";
    return 1;
  } else {
    return 0;
  }
}
function limpiarComentarios() {
  msjNombre.innerHTML = "";
  msjApellido.innerHTML = "";
  msjMail.innerHTML = "";
  msjCantidad.innerHTML = "";
}
function limpiarTodo() {
  limpiarComentarios();
  total.innerHTML = "";
  nombre.value = "";
  apellido.value = "";
  cantidad.value = "";
  mail.value = "";
}
function validaciones() {
  limpiarComentarios();
  let a = validarApellido();
  let b = validarCantidad();
  let c = validarMail();
  let d = validarNombre();
  if (a || b || c || d == 1) {
    window.alert("No puede ser calculado el total");
  } else {
    limpiarComentarios();
    total_pago();
  }
}

function total_pago() {
  const valorTicket = 200;
  let totalValorTicket = cantidad.value * valorTicket;
  switch (categoria.value) {
    case 1:
      totalValorTicket = totalValorTicket - 0.8 * totalValorTicket;
      break;
    case 2:
      totalValorTicket = totalValorTicket - 0.5 * totalValorTicket;
      break;
    case 3:
      totalValorTicket = totalValorTicket - 0.15 * totalValorTicket;
      break;
    default:
      totalValorTicket = totalValorTicket;
  }
  /*if (categoria.value == 1) {
  // totalValorTicket = totalValorTicket -(0.8 * totalValorTicket);
  } else if (categoria.value == 2) {
    totalValorTicket = totalValorTicket - (0.5 * totalValorTicket);
  } else if (categoria.value == 3){
    totalValorTicket = totalValorTicket - (0.15 * totalValorTicket);
  }*/
  total.innerHTML = totalValorTicket;
}
