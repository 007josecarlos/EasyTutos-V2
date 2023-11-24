function agregarMonitoria(){
    let fechaHora=$("#time").val();
    let ubicacion=$("#location").val();
    let materia=$("#subject").val();
    let correo=document.getElementById("correo").innerHTML;
    if(ubicacion.length>50){
        Swal.fire({
            icon:"error",
            title: "error",
            text: "la ubicacion no puede ser mayor a 50 caracteres incluyendo espacios en blanco."
          });
        return null;
    }
    let monitoria=[fechaHora, ubicacion, materia, correo];
    ajaxMonitoria(monitoria);
}
function ajaxMonitoria(monitoria){
    let monitoriaAux=JSON.stringify(monitoria);
    $.ajax({  
      data: {
             "monitoria" : monitoriaAux
      },
      type: "POST",
      dataType: "json",
      url: "../controllers/accion/crearMonitoria.php"
  })
   .done(function(response) {
      var mens=response.msg;  
      if(mens!=""){
          Swal.fire({
              text:mens,
              icon: response.type,
              title: "monitoria"
  
          }).then((result) => {
            if (result.isConfirmed) {
                $(location).attr('href',response.ruta);
            }
            })
        }
   })
   .fail(function(jqXHR, textStatus, errorThrown) {
      Swal.fire({
          title: "ALERTA",
          text: "La solicitud a fallado: " +  errorThrown
      });
  });
}