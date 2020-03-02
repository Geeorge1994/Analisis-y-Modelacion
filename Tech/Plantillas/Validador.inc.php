<?php
/*
abstract class Validador 
{

	protected $aviso_inicio;
	protected $aviso_cierre;	
	protected $domicilio;
	protected $descripcion;
	protected $error_domicilio;
	protected $error_descripcion;

	public function __construct($domicilio, $descripcion, $conexion) 
            {		
            
            
            
            }

	protected function variable_iniciada($variable) {
		if (isset($variable) && !empty($variable)) {
			return true;
		} else {
			return false;
		}
	}
	
	protected function validar_domicilio($conexion, $domicilio) 
                {
		if (!$this -> variable_iniciada($domicilio) && strlen($domicilio) < 50) 
                    {
			return "Debes escribir tu domicilio completo";
		} else {
			$this -> domicilio = $domicilio;
                    }
		
		if (strlen($domicilio) > 255) 
                    {
			return "El campo domicilio no puede ocupar más de 255 caracteres";
                    }
		
	}
	

	
	protected function validar_descripcion($conexion, $descripcion) 
        {
		if (!$this -> variable_iniciada($descripcion)) 
                {
			return "La descripcion no puede estar vacía";
		} else {
			$this -> descripcion = $descripcion;
		}
	}
	
	public function obtener_domicilio() 
        {
		return $this -> domicilio;
	}
	
	public function obtener_descripcion() 
        {
		return $this -> descripcion;
	}
	
	public function mostrar_domicilio()
        {
		if ($this -> domicilio != "") 
                {
			echo 'value = "' . $this -> domicilio . '"';
		}
	}
	
	public function mostrar_descripcion() 
        {
		if ($this -> descripcion != "" && strlen(trim($this -> descripcion)) > 0) 
                {
			echo $this -> descripcion;
		}
	}
	
	public function mostrar_error_domicilio() 
                {
		if ($this -> error_domicilio != "") 
                {
			echo $this -> aviso_inicio . $this -> error_domicilio . $this -> aviso_cierre;
		}
	}
	
	
	public function mostrar_error_descripcion() 
                {
		if ($this -> error_descripcion != "")
                 {
			echo $this -> aviso_inicio . $this -> error_descripcion . $this -> aviso_cierre;
		}
	}
	
	public function entrada_valida() 
               {
		if ($this -> error_descripcion  == "" && $this -> error_domicilio == "") 
                    {
			return true;
		} else {
			return false;
		}
	}
}
*/