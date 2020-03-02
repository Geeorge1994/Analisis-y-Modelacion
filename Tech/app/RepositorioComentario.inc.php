<?php


include_once 'app/config.inc.php';
include_once 'app/Conexion.inc.php';
include_once 'app/Comentario.inc.php';

class RepositorioComentario
{
    
    public static function insertar_comentario($conexion, $comentario)
    {
        $comentario_insertado = false;
        if(isset($conexion))
        {
            try 
            {
                
                $sql = "INSERT INTO tech.comentarios(autor_id, entrada_id, titulo, texto, fecha) VALUES(:autor_id, :entrada_id, :titulo, :texto, NOW())";
                $sentencia = $conexion -> prepare($sql);
                
                $AUTOR = $comentario -> obtener_autor_id();
                $ENTRADA = $comentario -> obtener_entrada_id();
                $TITULO = $comentario -> obtener_titulo();
                $TEXTO = $comentario -> obtener_texto();
                $sentencia -> bindParam(':autor_id', $AUTOR, PDO::PARAM_STR);
                $sentencia -> bindParam(':entrada_id', $ENTRADA, PDO::PARAM_STR);           
                $sentencia -> bindParam(':titulo', $TITULO, PDO::PARAM_STR);
                $sentencia -> bindParam(':texto', $TEXTO, PDO::PARAM_STR);
                $comentario_insertado= $sentencia -> execute();              
            } 
            catch (PDOException $ex) 
            {
                print 'ERROR'.$ex -> getMessage();
            }            
        }
        return $comentario_insertado;
    }
}