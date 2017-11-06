<?php
class ConexionBD {
    
    private $conexion = null;
    private $usuario = 'root';
    private $clave = '';
        
    public function __construct() {   
        //Se crea una conexion con la base de datos
        $this->conexion = new PDO("mysql:dbname=encuesta;host=localhost", $this->usuario, $this->clave);
    
    }
    
    public function getConexion(){
        return $this->conexion;
        
    }
    
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

