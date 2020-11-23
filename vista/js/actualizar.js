$(document).ready(function() {
    $("#FormActualizar").on('submit', function(e) {
        e.preventDefault();
        var datos = $(this).serializeArray();
        console.log(datos);
        $.ajax({
            url: $(this).attr("action"),
            data: datos,
            type: $(this).attr("method"),
            success: function(data) {
                console.log(data);
                var resultado = JSON.parse(data);
                console.log('->' + resultado.respuesta);
                if (resultado.respuesta == 'mal') {
                    Swal.fire({
                        icon: 'error',
                        title: 'Ups',
                        text: '¡Las contraseñas deben de ser iguales!'
                    })
                } else if (resultado.respuesta == 'error') {
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: '¡Ocurrio un error al actualizar los datos!'
                    })
                } else if (resultado.respuesta == 'exito') {
                    Swal.fire(
                            'Correcto!',
                            'Se ha actualizado correctamente los datos',
                            'success'
                        ),
                        location.reload();
                }
            }
        });
    });
});