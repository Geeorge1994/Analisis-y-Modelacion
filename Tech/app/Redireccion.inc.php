<?php

class Redireccion 
{
    public static function redirigir($url) 
    {  
    header('Location:'.$url, true, 301); //Error not found
    die();
    //exit();
        
    }
    
    
    
    
    
}