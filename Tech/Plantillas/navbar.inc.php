<?php
include_once 'app/ControlSesion.inc.php';
include_once 'app/config.inc.php';

Conexion::abrir_conexion();
$total_usuarios = RepositorioUsuario::obtener_numero_usuarios(Conexion::obtener_conexion());
//Conexion::cerrar_conexion();
?>

<link rel="icon" type="image/icon" href="imgs/img3.ico" />
<nav class="navbar navbar-inverse navbar-static-top">
    <div class="carousel">
        <div class="navbar-header">

            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Este botón despliega la barra de navegación</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"></a>
        </div>

        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li><a href="<?php echo SERVIDOR ?>"><h4><span class="glyphicon glyphicon-home" aria-hidden="true"> </span> Inicio</h4> </a></li><li>
                <li><a href="<?php echo RUTA_NUEVA_ENTRADA ?>"><h4><span class="glyphicon glyphicon-menu-hamburger" aria-hidden="true"></span>Entradas </h4> </a></li>
                <li><a href="<?php echo RUTA_COMPRA_VENTA ?>"><h4><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>Compra y venta</h4> </a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <?php
                if (ControlSesion::sesion_iniciada()) {
                    ?>
                    <li>
                        <a href="#"> 
                            <h4><span class="glyphicon glyphicon-user" aria-hidden="true"></span><?php echo ' ' . $_SESSION['nombre_usuario']; ?></h4>
                            
                        </a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"> 
                            <h4><span class="glyphicon glyphicon-dashboard" aria-hidden="true"> Opciones </span><span class="caret"></span> </h4>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="#">
                                    <h4>Favoritos</h4>   
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <h4>Comentarios</h4>
                                </a>
                            </li> 
                        </ul>
                    </li>
                    <li>
                        <a href="<?php echo RUTA_LOGOUT; ?>">
                            <h4> <span class="glyphicon glyphicon-log-out" aria-hidden="true"></span> Cerrar sesión </h4>

                        </a>
                    </li>
                    <?php
                } else {
                    ?>
                    <li>
                        <a href="#">
                            <h4> <span class="fa fa-users" aria-hidden="true"></span> </h4>
                            <?php
                            echo $total_usuarios;
                            ?>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo RUTA_LOGIN ?>"> 
                            <h4> <span class="glyphicon glyphicon-log-in" aria-hidden="true"></span> Iniciar sesión </h4>
                        </a>  
                    </li>
                    <li>
                        <a href="<?php echo RUTA_REGISTRO ?>">
                            <h4> <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Registro </h4>
                        </a> 
                    </li>
                    <?php
                }
                ?>
                
            </ul>
        </div>
    </div> 
</nav>