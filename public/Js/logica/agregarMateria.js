function verificarAsignatura(){
    let materia=$("#materia").val();
    let semestre=$("#semestre").val();
    let creditos=$("#creditos").val();
    if(!/^-?\d+$/.test(semestre) || semestre[0]=="-"){
        Swal.fire({
            icon:"error",
            title: "error",
            text: "el semestre ingresado no es un numero positivo."
        });
        return null;
    }
    if(!/^-?\d+$/.test(creditos) || creditos[0]=="-"){
        Swal.fire({
            icon:"error",
            title: "error",
            text: "los creditos ingresados no son un numero positivo."
        });
        return null;
    }
    let asignatura=[materia, semestre, creditos];
    ajaxAsignatura(asignatura);
}
function ajaxAsignatura(asignatura){
    let asignaturaAux=JSON.stringify(asignatura);
    $.ajax({  
      data: {
             "asignatura" : asignaturaAux
      },
      type: "POST",
      dataType: "json",
      url: "../controllers/accion/agregarMateria.php"
  })
   .done(function(response) {
      var mens=response.msg;  
      if(mens!=""){
          Swal.fire({
              text:mens,
              icon: response.type,
              title: "asignatura"
  
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