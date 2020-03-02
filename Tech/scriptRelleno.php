<?php

include_once 'app/Comentario.inc.php';
include_once 'app/Conexion.inc.php';
include_once 'app/config.inc.php';
include_once 'app/Entrada.inc.php';
include_once 'app/RepositorioComentario.inc.php';
include_once 'app/RepositorioEntrada.inc.php';
include_once 'app/Usuario.inc.php';
include_once 'app/RepositorioUsuario.inc.php';

Conexion::abrir_conexion();

for($usuarios =0; $usuarios < 100; $usuarios++)
    {
    $nombre = sa(10);
    $email = sa(5).'@'.sa(3);
    $password = password_hash('123456', PASSWORD_DEFAULT);
    $usuario = new Usuario('', $nombre, $email, $password, '', '');
    RepositorioUsuario::insertar_usuario(Conexion::obtener_conexion(), $usuario);
    }
    
for($entradas =0; $entradas <100; $entradas++)
    {
        $titulo = sa(10);
        $url = $titulo;
        $texto = lorem();
        $autor = rand(1, 100);

        $entrada = new Entrada('', $autor, $url, $titulo, $texto, '', '');
        RepositorioEntrada::insertar_entrada(Conexion::obtener_conexion(), $entrada);

    }

for($comentarios =0; $comentarios <100; $comentarios++)
    {
        $titulo = sa(10);
        $texto = lorem();
        $autor = rand(1, 100);
        $entrada = rand(1, 100);

        $comentario = new Comentario('', $autor, $entrada, $titulo, $texto, '');
        RepositorioComentario::insertar_comentario(conexion::obtener_conexion(), $comentario);

    }


    

function  sa($longitud)
    {
        $caracteres = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $numero_caracteres = strlen($caracteres);
        $string_aleatorio = '';
        for($i =0; $i < $longitud; $i++)
            {
            $string_aleatorio .= $caracteres[rand(0, $numero_caracteres - 1)];

            }
            return $string_aleatorio;
    }                                                               

    function lorem()
    {
        $lorem = '

Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean enim quam, dignissim et imperdiet eget, porta a sem. Curabitur gravida nisi eget metus posuere, feugiat venenatis mauris pulvinar. Ut pharetra ornare molestie. Morbi sodales, augue et rutrum feugiat, eros magna commodo lorem, at eleifend turpis massa quis urna. Praesent at sodales turpis. Vestibulum odio nulla, gravida eleifend rhoncus non, pharetra id est. Integer convallis nunc nec erat convallis, placerat imperdiet ligula aliquet. Quisque nec consequat ipsum, ac porta diam. Nullam rhoncus eleifend ligula, in ornare ligula tincidunt vitae. Etiam nulla lacus, rutrum vitae quam eget, imperdiet pellentesque enim.

Quisque id finibus turpis, eget pellentesque nisi. Pellentesque varius mi et posuere ultrices. Vivamus porttitor egestas enim ac faucibus. Fusce id elementum enim. Nam sit amet sapien quis massa sollicitudin euismod. Pellentesque turpis tortor, aliquet et elementum quis, ultrices vehicula ante. Mauris ac vulputate urna, sit amet vulputate magna. Pellentesque faucibus ex nunc, et fermentum est tempor non.

Vestibulum sed nisl arcu. Fusce consequat nibh enim, id hendrerit sapien pretium sed. Donec cursus quis est vel pellentesque. Mauris vel enim elementum, condimentum tellus id, ornare sem. Pellentesque ac consectetur neque, non malesuada lorem. Phasellus viverra tincidunt leo et finibus. Maecenas diam nibh, mollis id sagittis ut, pretium eget libero. Aliquam et ante eu dolor aliquet malesuada non at risus. Nullam nunc tellus, accumsan sit amet quam sed, sollicitudin fermentum nunc. Maecenas quis volutpat lectus. Integer a dui est. Vivamus bibendum felis dignissim felis commodo, eu consequat urna tincidunt. Vestibulum non urna nisi. Proin pretium, tortor et accumsan vehicula, sem odio luctus nunc, vitae pellentesque orci ante quis diam.';
     return $lorem;   
    }