<header class="header-desktop">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="header-wrap">
                <form class="form-header" action="" method="POST"></form>
                <div class="header-button">
                    <div class="account-wrap">
                        <div class="account-item clearfix js-item-menu">
                            <div class="image">
                                <img src="../vista/img/icon/avatar-01.jpg" alt="John Doe" />
                            </div>
                            <div class="content">
                                <a class="js-acc-btn"><?php echo $nombre; ?></a>
                            </div>
                            <div class="account-dropdown js-dropdown">
                                <div class="info clearfix">
                                    <div class="image">
                                        <a href="#">
                                            <img src="../vista/img/icon/avatar-01.jpg" alt="John Doe" />
                                        </a>
                                    </div>
                                    <div class="content">
                                        <h5 class="name">
                                            <a><?php echo $nombre; ?></a>
                                        </h5>
                                        <span class="email"><?php echo $email; ?></span>
                                    </div>
                                </div>
                                <div class="account-dropdown__body">
                                    <div class="account-dropdown__item">
                                        <a href="Perfil.php">
                                            <i class="zmdi zmdi-account"></i>Perfil</a>
                                    </div>
                                </div>
                                <div class="account-dropdown__footer">
                                    <a href="../modelo/salir.php">
                                        <i class="zmdi zmdi-power">
                                        </i>Cerrar sesi&oacute;n
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>