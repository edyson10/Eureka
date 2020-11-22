$(document).ready(function() {
    $("#logout").click(function(e) {
        e.preventDefault();
        $.ajax({
            success: function() {
                Swal.fire({
                    title: 'Cerrar sesión',
                    text: "¿Seguro desea cerrar sesión?",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Si, seguro'
                }).then((result) => {
                    if (result.isConfirmed) {
                        Swal.fire(
                            '¡Sesión cerrada!',
                            'Te redireccionaremos al login.',
                            'success'
                        ), setTimeout(function() {
                            window.location.href = "login.php";
                            $.post('../../modelo/salir.php');
                        }, 2000);
                    }
                })
            }
        });
    });
});

$(document).ready(function() {
    $("#myBtn").click(function() {
        $("#myModal").modal();
    });
});