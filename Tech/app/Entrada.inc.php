<?php 

class Entrada
{
 
    private $id;
    private $nombre_id;
    private $domicilio;
    private $descripcion;
    private $fecha;
    private $activa;
    
    
    public function __construct($id, $nombre_id, $domicilio, $descripcion, $fecha, $activa) 
    {
        $this -> id = $id;
        $this -> nombre_id = $nombre_id;
        $this -> domicilio = $domicilio;
        $this -> descripcion = $descripcion;
        $this -> fecha = $fecha;
        $this -> activa = $activa;
    }
    
    public function obtener_id()
    {
    return $this-> id;    
    }
   
    public function obtener_nombre_id()
    {
    return $this-> nombre_id;    
    }
    
    public function obtener_domicilio()
    {
    return $this-> domicilio;    
    }
    
    public function obtener_descripcion()
    {
    return $this-> descripcion;    
    }
    
    public function obtener_fecha()
    {
    return $this-> fecha;    
    }
    
    public function esta_activa() 
    {
        return $this -> activa;
    }
    
    public function cambiar_domicilio($domicilio)
    {
        $this -> domicilio = $domicilio;
    }
    
    public function cambiar_descripcion($descripcion) 
    {
        $this -> descripcion = $descripcion;
    }
    
    public function cambiar_activa($activa) 
    {
        $this -> activa = $activa;
    }
    
}