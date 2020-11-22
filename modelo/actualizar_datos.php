<?php

require_once '../controlador/conexion.php';

//die(json_encode($_POST));
session_start();
$documento = $_SESSION['documento'];
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
    if (!isset($direccion)) {
        $direccion = $_SESSION['direccion'];
    } 
    if (!isset($telefono)) {
        $telefono = $_SESSION['telefono'];
    }
    if (!isset($email)) {
        $email = $_SESSION['email'];
    }
    if (isset($_SESSION['password'])) { }
    
    $sql = "UPDATE usuario SET direccion = '$direccion', telefono = '$telefono', email = '$email' WHERE documento = $documento";

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

    mysqli_close($conexion);
}
