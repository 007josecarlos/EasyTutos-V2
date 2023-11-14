$(document).ready(function(){
    $(document).on('click', '#login', function(){
  
      let correo=$("#email").val();
      let contraseña=$("#password").val();
  
        if(correo!="" && contraseña!=""){
            ajaxLogin(correo, contraseña);
        }
        else{
          Swal.fire({
            icon:"error",
            title: "Error",
            text: "uno de los campos de inicio de sesion se encuentran vacios."
          });
        }
    });
    $(document).on('focusout', '#email', function(){
  
      let correo=$("#email").val();
  
      if(correo=="" || correo.includes(' ') || !correo.includes('@')){
        Swal.fire({
          icon:"warning",
          title: "alerta",
          text: "no se ha ingresado un correo electronico valido."
        });
      }
    });
    $(document).on('focusout', '#password', function(){
  
      let contraseña=$("#password").val();
      
      if(contraseña=="" || contraseña.includes(' ')){
        Swal.fire({
          icon:"warning",
          title: "alerta",
          text: "no se ha ingresado una contraseña valida."
        });
      }
    });
});
  
function ajaxLogin(correo, contraseña){
    $.ajax({
    data: {
            "email" : correo,
            "contraseña": contraseña
    },
    type: "POST",
    dataType: "json",
    url: "/EasyTutos/controllers/accion/autenticarLogin.php"
    })
.done(function(response) {
    var mens=response.msg;

    if(mens!=""){
        Swal.fire({
            text:mens,
            icon: response.type,
            title: "Login"

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