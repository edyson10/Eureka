<?php

require_once '../controlador/conexion.php';
session_start();
if (isset($_SESSION['rol'])) {
    header('Location: dashboard.php');
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EUREKA</title>
    <link href="../vista/css/estilo.css" rel="stylesheet">
    <!-- Custom style Sweetalert2 -->
    <link href="../vista/css/sweetalert2.min.css" rel="stylesheet">
</head>

<body>
    
    <div class="login-wrap">
        <form class="user" id="FormLogin" method="POST" name="FormLogin" action="../modelo/model_login.php">
            <div class="login-html">
                <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">INICIO SESI&Oacute;N</label>
                <!--vista registrarse-->
                <!--input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Registrate</label-->
                <div class="login-form">
                    <div class="sign-in-htm">
                        <div class="group">
                            <label for="user" class="label">Usuario</label>
                            <input name="ingresarUsuario" id="ingresarUsuario" type="text" class="input">
                        </div>
                        <div class="group">
                            <label for="pass" class="label">Contraseña</label>
                            <input name="ingresarContrasena" id="ingresarContrasena" type="password" class="input" data-type="password">
                        </div>
                        <div class="group">
                            <label for="pass" class="label">Rol</label>
                            <select class="form-control" id="ingresarTipo" name="ingresarTipo">
                                <option value="Seleccione">Seleccione el rol</option>
                                <option value="Director">Director</option>
                                <option value="Supervisor">Supervisor</option>
                            </select>
                        </div>
                        <div class="group">
                            <button type="submit" class="button">Iniciar Sesi&oacute;n</button>
                        </div>
                        <div class="hr"></div>
                        <div class="foot-lnk">
                            <a href="#forgot"><i style="color: blue;">¿Olvidastes tu contraseña?</i></a>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="../vista/vendor/jquery/jquery.min.js"></script>
    <script src="../vista/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Javasript Sweetalert2 -->
    <script src="../vista/js/sweetalert2.min.js"></script>

    <script src="../vista/js/login.js"></script>
</body>

</html>