<?php

require './ControladorGeneral.php';
require './SentenciasBD.php';

class cualquiera extends ControladorGeneral implements SentenciasBD {
    
    public function buscarTodos(){        
        //
        $sentencia = $this->ejecutarSentencia(SentenciasBD::BUSCAR_Paises);
        $paises = $sentencia->fetchAll(PDO::FETCH_ASSOC);
        return $paises;        
    }}
    /*
    public function guardar(){
        //Se guardan en variables los datos recibidos 
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $dni = $_POST['dni'];
        $id = $_POST['id'];          
        $parametros = array($nombre, $apellido, $dni);        
        $resultado = null;
*/
