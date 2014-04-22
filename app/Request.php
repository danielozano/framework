<?php

class Request {

    private $_controlador;
    private $_metodo;
    private $_argumentos;

    function __construct() {

            $url= $_SERVER['REQUEST_URI'];
            #LIMPIAR LA URL DE CARACTERES INVALIDOS
            //$url = filter_input(INPUT_GET, 'url', FILTER_SANITIZE_URL);
            #CONVERTIR LA URL EN UN ARRAY PARTIENDO POR CADA /
            $url = explode('/', $url);
            #SE ELIMINAN TODAS LAS POSICIONES DEL ARRAY QUE PUDIERAN ESTAR VACÍAS
            #POR EJEMPLO SI ALGUIEN PONE /// EN LA URL
            $url = array_filter($url);
            #TOMAR EL PRIMER ARGUMENTO DEL ARRAY QUE SERA EL CONTROLADOR
            #CON ARRAY_SHIFT() LO TOMAMOS Y LO ELIMINAMOS DEL ARRAY
            #HAREMOS LO MISMO CON EL RESTO DE PARÁMETROS
                    # QUITO LA PRIMERA POSICION DE MI ARRAY
                    array_shift($url);
            $this->_controlador = strtolower(array_shift($url));
            $this->_metodo = strtolower(array_shift($url));
            $this->_argumentos = $url;

        #ESTABLECER VALORES POR DEFECTO EN CASO DE QUE NO SE PASEN LOS DATOS NECESARIOS POR LA URL
        if (!$this->_controlador) {
            $this->_controlador = DEFAULT_CONTROLLER;
        }

       if (!$this->_metodo) {
            $this->_metodo = 'index';
        }

        if (!isset($this->_argumentos)) {
            $this->_argumentos = array();
        }
    }

    #METODOS GET PARA NUESTROS PARAMETROS

    public function getControlador() {
        return $this->_controlador;
    }

    public function getMetodo() {
        return $this->_metodo;
    }

    public function getArgumentos() {
        return $this->_argumentos;
    }


}
