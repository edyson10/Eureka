$(document).ready(function() {
    $("#FormLogin").on('submit', function(e) {
        e.preventDefault();
        var datos = $(this).serializeArray();
        console.log(datos);
        $.ajax({
            url: $(this).attr("action"),
            data: datos,
            type: $(this).attr("method"),
            success: function(data) {
                //console.log(data);
                var resultado = JSON.parse(data);
                //console.log(resultado);
                if (resultado.respuesta == 'exitoso') {
                    Swal.fire(
                        'Iniciaste Sesión',
                        'Bienvenido(a) a Eureka',
                        'success'
                    )
                    if (resultado.rol == 'supervisor') {
                        setTimeout(function() {
                            window.location.href = "../vista/dashboard.php";
                        }, 2000);
                    } else if (resultado.rol == 'director') {
                        setTimeout(function() {
                            window.location.href = "../vista/dashboard.php";
                        }, 2000);
                    }
                } else if (resultado.respuesta == 'error') {
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: 'Usuario, contraseña y/o rol incorrectos'
                    })
                } else if (resultado.respuesta == 'seleccion') {
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: 'Debes de seleccionar un rol correcto'
                    })
                }
            }
        });
    });
});