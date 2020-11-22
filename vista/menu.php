<?php

$rol = $_SESSION['rol'];

?>
<!-- HEADER MOBILE-->
<header class="header-mobile d-block d-lg-none">
    <div class="header-mobile__bar">
        <div class="container-fluid">
            <div class="header-mobile-inner">
                <a class="logo" href="#">
                    <img src="../vista/img/icono.png" alt="CoolAdmin" />
                </a>
                <button class="hamburger hamburger--slider" type="button">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
            </div>
        </div>
    </div>
    <nav class="navbar-mobile">
        <div class="container-fluid">
            <ul class="navbar-mobile__list list-unstyled">
                <li>
                    <a href="">
                        <i class="fas fa-tachometer-alt"></i>Inicio
                    </a>
                </li>
                <?php if ($rol == '1') { ?>
                    <li>
                        <a href="Registro.php">
                            <i class="fas fa-user"></i>Registro
                        </a>
                    </li>
                <?php } ?>
            </ul>
        </div>
    </nav>
</header>
<!-- END HEADER MOBILE-->

<!-- MENU SIDEBAR-->
<aside class="menu-sidebar d-none d-lg-block">
    <div class="logo">
        <a href="#">
            <img src="../vista/img/icono.png" alt="Cool Admin" style="margin-top: 15px;" />
        </a>
    </div>
    <div class="menu-sidebar__content js-scrollbar1">
        <nav class="navbar-sidebar">
            <ul class="list-unstyled navbar__list">
                <li>
                    <a href="Dashboard.php">
                        <i class="fas fa-tachometer-alt"></i>Inicio
                    </a>
                </li>
                <?php if ($rol == '1') { ?>
                    <li>
                        <a href="Registro.php">
                            <i class="fas fa-user"></i>Registro
                        </a>
                    </li>
                <?php } ?>
            </ul>
        </nav>
    </div>
</aside>
<!-- END MENU SIDEBAR-->