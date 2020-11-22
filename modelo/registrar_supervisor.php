<?php

require_once '../controlador/conexion.php';

//die(json_encode($_POST));

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$documento = $_POST['documento'];
$direccion = $_POST['direccion'];
$telefono = $_POST['telefono'];
$email = $_POST['email'];
$contraseña = $_POST['password'];
$repitaLaContraseña = $_POST['repPassword'];

if ($contraseña != $repitaLaContraseña) {
    $respuesta = array(
        'respuesta' => 'mal'
    );
    echo json_encode($respuesta);
} else {
    $sql1 = "SELECT * FROM usuario WHERE documento = '$documento'";
    $result = mysqli_query($conexion, $sql1);
    $row = mysqli_num_rows($result);
    echo 'Prueba' . $row;
    if ($row == 0) {
        $respuesta = array(
            'respuesta' => 'existe'
        );
        echo json_encode($respuesta);
    } else {
        $sql = "INSERT INTO usuario (id_usuario, nombre, apellido, documento, direccion, telefono, email, contrasena, rol_usuario_rol_usuario_ID) 
        VALUES (NULL, '$nombre', '$apellido', '$documento', '$direccion', '$telefono', '$email', '$contraseña', '2');";
        $ejecutar = mysqli_query($conexion, $sql);
        if ($ejecutar) {
            $respuesta = array(
                'respuesta' => 'exito'
            );
        } else {
            $respuesta = array(
                'respuesta' => 'error'
            );
        }
        echo json_encode($respuesta);
    }

    mysqli_close($conexion);
}
