<?php
include_once 'app/Conexion.inc.php';
include_once 'app/RepositorioUsuario.inc.php';
$titulo = "Servicio Tecnico de Lavadoras y Refrigeradores";
include_once 'Plantillas/documento-declaracion.inc.php';
include_once 'Plantillas/navbar.inc.php';
?> 



<link rel="icon" type="image/icon" href="imgs/img3.ico" />
<div class="container">
    <div class="jumbotron">
        <h1>Techno Hogar</h1>
        <p> Servicio tecnico</p>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4><span class="glyphicon glyphicon-apple" aria-hidden="true"></span> Registrese para solicitar un servicio </h4>

                        </div>
                        <div class="panel-body">
                            <div class="form-group">
                               
                                <a href="<?php echo RUTA_REGISTRO; ?>">
                                    <h4><button class="form-control">Registrarse</button></h4>
                                </a>
                            </div>

                        </div>
                    </div>
                    
            <div class="panel panel-default ">
                <div class="panel-heading ">
                    <h3><span class="glyphicon glyphicon-send" aria-hidden="true"></span> Contacto</h3>
                </div>
                <div class="panel-body">
                    
                    <h3>premium026@gmail.com</h3>
                </p>
                </div>
            </div>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4><span class="glyphicon glyphicon-time" aria-hidden="true"></span> Acerca de nosotros</h4>
                </div>
                <div class="panel panel-body col-md-12">
                    <h4><b><p class=" text-info">
                                Somos un negocio independiente al servicio de reparacion y mantenimiento
                                de lavadoras, secadoras, refrigeradores, congeladores, etc.
                                Con mas de 20 años de experiencia se les ha brindado un trabajo de calidad
                                a cientos de clientes en la ciudades de Saltillo, Arteaga y Ramos Arizpe.
                            </p></b></h4>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include_once 'Plantillas/documento-cierre.inc.php';
?>                            
