<?php

class View {
    #GUARDAREMOS EL CONTROLADOR PARA SABER QUE TEMPLATE CARGAR

    private $_controlador;

    #RECIBIRÁ UN OBJETO REQUEST

    function __construct(Request $peticion) {
        $this->_controlador = $peticion->getControlador();
    }

    public function render($vista) {
        #OBTENER RUTA DEL ARCHIVO VISTA A CARGAR
        $rutaVista = ROOT . 'views' . DS . $this->_controlador . DS . $vista . '.phtml';
        #COMPROBAR QUE EXISTA Y CREAR EXCEPCION
        #AQUI SE CARGAN TODOS LOS ELEMENTOS VISIBLES DE NUESTRA APLICACION
        #HEADER,FOOTER,MENUS ETC.
        if (is_readable($rutaVista)) {
            #SI EXISTE CARGAR:
            # HEADER - VISTA - FOOTER
            require_once ROOT . 'views' . DS . 'layout' . DS . DEFAULT_LAYOUT . DS . 'header.php';
            require_once $rutaVista;
            require_once ROOT . 'views' . DS . 'layout' . DS . DEFAULT_LAYOUT . DS . 'footer.php';
            
        } else {
            throw new Exception('ERROR VISTA NO ENCONTRADA. DEBE CREAR: '.$rutaVista);
        }
    }

}
