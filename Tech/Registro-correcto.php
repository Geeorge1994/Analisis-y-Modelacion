<?php
include_once 'app/config.inc.php';
include_once 'app/Conexion.inc.php';
include_once 'app/RepositorioUsuario.inc.php';
include_once 'app/Redireccion.inc.php';
/*
if(isset($_GET['nombre']) && !empty($_GET['nombre']))
{
    $nombre = $_GET['nombre'];
}else{
    Redireccion::redirigir(SERVIDOR);
}
 * 
 */
$titulo = "¡Registro correcto!";

include_once 'Plantillas/documento-declaracion.inc.php';
include_once 'Plantillas/navbar.inc.php';

?>
<!DOCTYPE html>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2> <span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span>Registro correcto</h2>
                </div>
                <div class="panel-body text-center">
                    <h2><p>¡Gracias por registrarte<b><?php echo ''; ?></b>!</p>
                    <br>
                    <p><a href="<?php echo RUTA_LOGIN ?>">Inicia sesión</a> para usar tu cuenta</p></h2>
                </div>
            </div>
        </div>
    </div>
</div>