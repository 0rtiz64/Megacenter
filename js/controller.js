$(document).ready(function () {
    $("input:submit").click(function () {
        return false;
    })
});


function guardar(){
    var nombre = $('#nombrePersona').val().toUpperCase();
    var empresa = $('#empresa').val().toUpperCase();
    var telefono1 = $('#telefono1').val().toUpperCase();
    var telefono2 = $('#telefono2').val().toUpperCase();
    var correo = $('#correo').val();
    var comentarios = $('#comentarios').val().toUpperCase();
    var registro = $('#registro').val();

    if(nombre.trim().length ==""){
        swal("¡CUIDADO!", "NOMBRE VACIO", "error");
        return false;
    }else{
            if(empresa.trim().length==""){
                swal("¡CUIDADO!", "NOMBRE EMPRESA VACIO", "error");
                return false;
            }else{
                if(telefono1.trim().length==""){
                    swal("¡CUIDADO!", "TELEFONO 1 VACIO", "error");
                    return false;
                }else{
                    if(correo.trim().length==""){
                        swal("¡CUIDADO!", "CORREO VACIO", "error");
                        return false;
                    }else{
                        if(comentarios.trim().length ==""){
                            swal("¡CUIDADO!", "COMENTARIOS VACIO", "error");
                            return false;
                        }//FIN COMENTARIOS
                    }//FIN CORREO
                }//FIN TELEFONO 1
            }// FIN EMPRESA
    }//FIN NOMBRE

var url = 'php/guardarRegistro.php';
    $.ajax({
        type:'POST',
        url:url,
        data:{
            phpNombre:nombre,
            phpEmpresa:empresa,
            phpTel1:telefono1,
            phpTel2:telefono2,
            phpCorreo:correo,
            phpComentarios:comentarios,
            phpRegistro:registro,

        },
        success: function(datos){
            //SUCCESS
            swal("FELICIDADES "+nombre, "REGISTRO GUARDADO EXITOSAMENTE", "success");

             $('#nombrePersona').val("");
             $('#empresa').val("");
             $('#telefono1').val("");
             $('#telefono2').val("");
             $('#correo').val("");
             $('#comentarios').val("");
             $('#registro').val("");
            return false;


        }
    });

    return false;



}
