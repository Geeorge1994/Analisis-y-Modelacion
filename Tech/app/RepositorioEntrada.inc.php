<?php

include_once 'app/config.inc.php';
include_once 'app/Conexion.inc.php';
include_once 'app/Entrada.inc.php';

class RepositorioEntrada
{
    
    public static function insertar_entrada($conexion, $entrada)
    {
        $entrada_insertada = false;
        if(isset($conexion))
        {
            try 
            {
                
                $sql = "INSERT INTO tech.entradas(nombre_id, domicilio, descripcion, fecha, activa) VALUES(:nombre_id, :domicilio, :descripcion, NOW(), 0)";
                $sentencia = $conexion -> prepare($sql);
                $NOMBRE_ID = $entrada -> obtener_nombre_id();
                $DOMICILIO = $entrada -> obtener_domicilio();
                $DESCRIPCION = $entrada -> obtener_descripcion();
                $sentencia -> bindParam(':nombre_id', $NOMBRE_ID, PDO::PARAM_STR);
                $sentencia -> bindParam(':domicilio', $DOMICILIO, PDO::PARAM_STR);
                $sentencia -> bindParam(':descripcion', $DESCRIPCION, PDO::PARAM_STR);
                $entrada_insertada= $sentencia -> execute();              
            } 
            catch (PDOException $ex) 
            {
                print 'ERROR'.$ex -> getMessage();
            }            
        }
        return $entrada_insertada;
    }
    
    public static function obtener_todas_por_fecha_descendiente($conexion) 
    {
        $entradas = [];

        if (isset($conexion)) {
            try {
                $sql = "SELECT * FROM tech.entradas ORDER BY fecha DESC LIMIT 5";

                $sentencia = $conexion -> prepare($sql);

                $sentencia -> execute();

                $resultado = $sentencia -> fetchAll();

                if (count($resultado)) {
                    foreach ($resultado as $fila) {

                        $entradas[] = new Entrada(
                                $fila['id'], $fila['nombre_id'], $fila['domicilio'],
                                $fila['descripcion'], $fila['fecha'], $fila['activa']
                        );

                    }
                }
            } catch (PDOException $ex) {
                print 'ERROR: '.$ex -> getMessage();
            }
        }

        return $entradas;
    }
}