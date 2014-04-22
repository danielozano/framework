<?php

class indexController extends Controller {

    function __construct() {
        parent::__construct();
    }

    public function noticias() {
        #CARGAR EL MODELO
        $noticias = $this->loadModel('Noticias');
        #NOTICIAS (OBJETO NoticiasModel-> getNoticias())
        $this->_view->noticias = $noticias->getAllNoticias();
        $this->_view->titulo = 'Noticias';
        $this->_view->render('index');
    }

    public function index() {
        #PARA MODIFICAR EL MENSAJE DE INDEX SOLO HAY QUE MODIFICAR ESTE STRING
        $cuerpo = 'Este es un ejemplo de vista.
        Se está cargando el item /index/index.php solo hay que modificar este archivo si se quieren reutilizar su controlador y su vista, si no se han de borrar /controllers/indexController.php y /index/index.phtml. <br/>

        En el propio indexController.php hay una función llamada noticias() que se encarga de traer desde un modelo (ModelNoticias) una serie de valores de la base de datos.';

        $this->_view->titulo = 'Inicio';
        $this->_view->cuerpo = $cuerpo;
        $this->_view->render('index');
    }

}
