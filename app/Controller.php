<?php

#ESTE SERÁ EL CONTROLADOR DEL QUE HEREDARÁN TODOS LOS DEMAS CONTROLADORES

abstract class Controller {

    protected $_view;

    function __construct() {
  
        #CARGAR LA VISTA EN EL CONSTRUCTOR DEL CONTROLADOR
        $this->_view = new View(new Request);
    }

    protected function loadModel($modelo) {
        $modelo = $modelo . 'Model';
        $rutaModelo = ROOT . 'models' . DS . $modelo . '.php';
        if (is_readable($rutaModelo)) {
            require_once $rutaModelo;
            
            $modelo = new $modelo;
            return $modelo;
        }else{
            throw new Exception ("MODELO NO ENCONTRADO");
        }
    }

    abstract public function index();
}
