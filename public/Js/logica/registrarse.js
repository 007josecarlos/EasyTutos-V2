var contraseña=document.getElementById("password");
var contraseñaRep=document.getElementById("passwordRepeat");
var letras="abcdefghyjklmnñopqrstuvwxyz";
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
  if (nombres=="" || !tieneLetras(nombres)){
    Swal.fire({
      icon:"error",
      title: "error",
      text: "no ha ingresado su nombre o apellidos."
    });
    return null;
  }
  if (apellidos=="" || !tieneLetras(nombres)){
    Swal.fire({
      icon:"error",
      title: "error",
      text: "no ha ingresado su apellido o apellidos."
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
function tieneLetras(texto){
  texto = texto.toLowerCase();
  for(i=0; i<texto.length; i++){
     if (letras.indexOf(texto.charAt(i),0)!=-1){
        return true;
     }
  }
  return false;
}
function ajaxRegistro(usuario){
  let usuarioAux=JSON.stringify(usuario);
  $.ajax({  
    data: {
           "usuario" : usuarioAux
    },
    type: "POST",
    dataType: "json",
    url: "/EasyTutos/controllers/accion/registro.php"
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