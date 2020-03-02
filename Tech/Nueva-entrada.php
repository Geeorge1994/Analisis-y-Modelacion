<?php


include_once 'app/Config.inc.php';
include_once 'app/Conexion.inc.php';
include_once 'app/Entrada.inc.php';
include_once 'app/RepositorioEntrada.inc.php';
include_once 'Plantillas/documento-declaracion.inc.php';
include_once 'app/ValidadorEntrada.inc.php';
include_once 'app/ControlSesion.inc.php';
include_once 'app/Redireccion.inc.php';
include_once 'Plantillas/navbar.inc.php';



if(isset($_POST['guardar']))
    {
    Conexion::abrir_conexion();
    $validador = new ValidadorEntrada($_POST['domicilio'], htmlspecialchars($_POST['descripcion']), Conexion::obtener_conexion());
    
    if($validador -> entrada_valida())
        {
        if(ControlSesion::sesion_iniciada())
            {
                $entrada = new Entrada('', $_SESSION['id_usuario'], $validador -> obtener_domicilio(), $validador -> obtener_descripcion(), 
                        '', '');
        
                $entrada_insertada = RepositorioEntrada::insertar_entrada(Conexion::obtener_conexion(), $entrada);
                if($entrada_insertada)
                {
                Redireccion::redirigir(RUTA_NUEVA_ENTRADA);
                }
            }else{
                Redireccion::redirigir(RUTA_REGISTRO);
                 }
        Conexion::cerrar_conexion();
      }
    }

?>


<div class="container">
    <div class="jumbotron">
        <h1>Techno Hogar</h1>
        <p>Solicita un servicio tecnico aqui.</p>
    </div>
</div>

<div class="container">
    <div class="row">               
        <div class="col-md-12 text-center">                       
            <div class="panel panel-default">                
                <div class="panel-heading">                
                    <h3 class="panel-title"> </h3>
                    <h2>Instrucciones.</h2>                                    
                </div>
                <div class="panel-body">
                    <p class="text-justify">
                    <h3> Escribe los datos solicitados de manera clara,
                        y especifíca en la descripcion el problema del
                        aparato a detalle.</h3>
                    </p>
                </div>
            </div>
        </div>

    </div>
</div>


<div class="container">
	<div class="row">
		<div class="col-md-12">
			<form class="nueva-entrada" method="post" action="<?php echo RUTA_NUEVA_ENTRADA?>">
				<?php
					if (isset($_POST['guardar'])) {
						include_once 'plantillas/EntradaValidada.inc.php';
					} else {
						include_once 'plantillas/EntradaVacia.inc.php';
					}
				?>
			</form>	
		</div>
	</div>
</div>

<?php
include_once 'plantillas/documento-cierre.inc.php';
?>



 