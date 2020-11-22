<?php

require_once '../controlador/conexion.php';

//die(json_encode($_POST));

$ingresarUsuario = $_POST['ingresarUsuario'];
$ingresarContrasena = $_POST['ingresarContrasena'];
$ingresarTipo = $_POST['ingresarTipo'];

if ($ingresarTipo == 'Seleccione') {
    $respuesta = array('respuesta' => 'seleccion');
    echo json_encode($respuesta);
    return;
} else {
    if ($ingresarTipo == 'Director') {
        $sql = "SELECT usuario.nombre, usuario.apellido, usuario.email, usuario.documento, usuario.direccion, usuario.telefono 
        from usuario inner join rol on usuario.rol_usuario_rol_usuario_ID = rol.id_rol where usuario.email = '$ingresarUsuario' 
        and usuario.contrasena = '$ingresarContrasena' and rol.descripcion = 'Director'";

        $ejecutar = mysqli_query($conexion, $sql);
        $rowcount = mysqli_num_rows($ejecutar);

        if ($rowcount > 0) {
            $row = $ejecutar->fetch_array(MYSQLI_ASSOC);
            session_start();
            $_SESSION['rol'] = 1;
            $_SESSION['nombre'] = $row['nombre'];
            $_SESSION['apellido'] = $row['apellido'];
            $_SESSION['documento'] = $row['documento'];
            $_SESSION['direccion'] = $row['direccion'];
            $_SESSION['telefono'] = $row['telefono'];
            $_SESSION['email'] = $row['email'];
            $respuesta = array(
                'respuesta' => 'exitoso',
                'rol' => 'supervisor'
            );
        } else {
            $respuesta = array('respuesta' => 'error');
        }
        echo json_encode($respuesta);
    } else if ($ingresarTipo == 'Supervisor') {
        $sql = "SELECT usuario.nombre, usuario.apellido, usuario.email, usuario.documento, usuario.direccion, usuario.telefono 
        from usuario inner join rol on usuario.rol_usuario_rol_usuario_ID = rol.id_rol where usuario.email = '$ingresarUsuario' 
        and usuario.contrasena = '$ingresarContrasena' and rol.descripcion = 'Supervisor'";

        $ejecutar = mysqli_query($conexion, $sql);
        $rowcount = mysqli_num_rows($ejecutar);

        if ($rowcount > 0) {
            $row = $ejecutar->fetch_array(MYSQLI_ASSOC);
            session_start();
            $_SESSION['rol'] = 2;
            $_SESSION['nombre'] = $row['nombre'];
            $_SESSION['apellido'] = $row['apellido'];
            $_SESSION['documento'] = $row['documento'];
            $_SESSION['direccion'] = $row['direccion'];
            $_SESSION['telefono'] = $row['telefono'];
            $_SESSION['email'] = $row['email'];
            $respuesta = array(
                'respuesta' => 'exitoso',
                'rol' => 'director'
            );
        } else {
            $respuesta = array('respuesta' => 'error');
        }
        echo json_encode($respuesta);
    }
}

mysqli_close($conexion);
