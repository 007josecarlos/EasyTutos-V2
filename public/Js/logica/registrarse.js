var contraseña=document.getElementById("password");
var contraseñaRep=document.getElementById("passwordRepeat");
function verificarRegistro(){
  let contraseñaUser=contraseña.value;
  let contraseñaUserRep=contraseñaRep.value;
  let correo=$("#email").val();
  let nombres=$("#nombre").val();
  let apellidos=$("#apellido").val();
  let telefono=$("#num-tel").val();
  if (contraseñaUser.length<7 || contraseñaUser.includes(' ')){
    Swal.fire({
      icon:"error",
      title: "error",
      text: "la contraseña tiene menos de 7 caracteres."
    });
    return null;
  }
  if (contraseñaUserRep != contraseñaUser){
    Swal.fire({
      icon:"error",
      title: "error",
      text: "la contraseña y la contraseña repetida no son iguales."
    });
    return null;
  }
  if (correo=="" || correo.includes(' ')){
    Swal.fire({
      icon:"error",
      title: "error",
      text: "no ha ingresado un correo valido o  tiene incluido espacios en blanco en el correo."
    });
    return null;
  }
  if (nombres=="" || /\d/.test(nombres)){
    Swal.fire({
      icon:"error",
      title: "error",
      text: "no ha ingresado su nombre o tiene un numero en el nombre."
    });
    return null;
  }
  if (apellidos=="" || /\d/.test(apellidos)){
    Swal.fire({
      icon:"error",
      title: "error",
      text: "no ha ingresado su apellido o tiene un numero en el apellido."
    });
    return null;
  }
  if(telefono.length>10){
    Swal.fire({
      icon:"error",
      title: "error",
      text: "el numero de telefono no puede ser mayor a 10 digitos."
    });
    return null;
  }
  let usuario=[correo, contraseñaUser, nombres, apellidos, telefono];
  ajaxRegistro(usuario);
}
function ajaxRegistro(usuario){
  let usuarioAux=JSON.stringify(usuario);
  $.ajax({  
    data: {
           "usuario" : usuarioAux
    },
    type: "POST",
    dataType: "json",
    url: "../controllers/accion/registro.php"
})
 .done(function(response) {
    var mens=response.msg;  
    if(mens!=""){
        Swal.fire({
            text:mens,
            icon: response.type,
            title: "Registro"

        });
    }
 })
 .fail(function(jqXHR, textStatus, errorThrown) {
    Swal.fire({
        title: "ALERTA",
        text: "La solicitud a fallado: " +  errorThrown
    });
});
}