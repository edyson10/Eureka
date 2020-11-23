<?php

session_start();
if (!isset($_SESSION['rol'])) {
    header('Location: login.php');
}
$nombre = $_SESSION['nombre'];
$email = $_SESSION['email'];

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <?php require_once 'head.php'; ?>
    <!-- Title Page-->
    <title>Registro</title>

</head>

<body class="animsition">
    <div class="page-wrapper">
        <?php require_once 'menu.php'; ?>
        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <?php require_once 'nav.php';?>
            <!-- HEADER DESKTOP-->
            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <!--
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1">Perfil</h2>
                                    <!-
                                    <button class="au-btn au-btn-icon au-btn--blue">
                                        <i class="zmdi zmdi-plus"></i>add item
                                    </button>
                                </div>
                            </div>
                        </div>-->

                        <div class="row m-t-5">
                            <div class="col-lg-2"></div>
                            <div class="col-lg-8">
                                <div class="card">
                                    <div class="card-header">Registrar supervisor </div>
                                    <div class="card-body card-block">
                                        <form id= "FormRegistroSupervisor" name="FormRegistroSupervisor" action="../modelo/registrar_supervisor.php" method="POST" >
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-user"></i>
                                                    </div>
                                                    <input type="text" id="nombre" name="nombre" placeholder="Nombre" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-user"></i>
                                                    </div>
                                                    <input type="text" id="apellido" name="apellido" placeholder="Apellido" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-credit-card"></i>
                                                    </div>
                                                    <input type="text" id="documento" name="documento" placeholder="Documento" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-home"></i>
                                                    </div>
                                                    <input type="text" id="direccion" name="direccion" placeholder="Direcci&oacute;n" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-phone"></i>
                                                    </div>
                                                    <input type="text" id="telefono" name="telefono" placeholder="Tel&eacute;fono" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-envelope"></i>
                                                    </div>
                                                    <input type="email" id="email" name="email" placeholder="Email" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-asterisk"></i>
                                                    </div>
                                                    <input type="password" id="password" name="password" placeholder="Contraseña" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-asterisk"></i>
                                                    </div>
                                                    <input type="password" id="repPassword" name="repPassword" placeholder="Repita la contraseña" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="form-actions form-group">
                                                <button type="submit" class="btn btn-success btn-sm">Registrar</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2"></div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright ©
                                        <script>
                                            document.write(new Date().getFullYear());
                                        </script>. All rights reserved.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>
    </div>
    <?php require_once 'footer.php';?>
</body>

</html>