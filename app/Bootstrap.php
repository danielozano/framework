<?php

class Bootstrap {
    #RECIBIRÁ UN OBJETO REQUEST EL CUAL TENDRÁ LOS PARÁMETROS DE LA URL

    public static function run(Request $peticion) {

        #OBTENER EL CONTROLADOR
        #POR EJEMPLO indexController
        $controller = $peticion->getControlador() . 'Controller';

        #OBTENER LA RUTA DE DICHO CONTROLADOR
        $rutaControlador = ROOT . 'controllers' . DS . $controller . '.php';
        #OBTENER EL METODO A USAR DEL CONTROLADOR
        $metodo = $peticion->getMetodo();
        #OBTENER ARGUMENTOS DE ESE CONTROLADOR
        $argumentos = $peticion->getArgumentos();
        
        #INDICA SI UN FICHERO EXISTE Y ES LEGIBLE
        if (is_readable($rutaControlador)) {
            #SI EXISTE Y ES LEGIBLE LO IMPORTA
            require_once $rutaControlador;
            #CREA UN OBJETO DE NUESTRA CLASE CONTROLADOR
            #EJEMPLO:
            # $controller = new indexController();
            $controller = new $controller;

            if (is_callable(array($controller, $metodo))) {
                $metodo = $peticion->getMetodo();
            } else {
                $metodo = 'index';
            }

            if (!empty($argumentos)) {
                call_user_func_array(array($controller, $metodo), $argumentos);
            } else {
                call_user_func(array($controller, $metodo));
            }
        } else {
            throw new Exception("CONTROLADOR NO ENCONTRADO, DEBE CREAR: ".$rutaControlador);
        }
    }

}
