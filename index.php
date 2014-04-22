<?php

#PARA EVITAR ERRORES AL TRABAJAR EN WINDOWS Y LINUX
define('DS', DIRECTORY_SEPARATOR);
#PATH DE LA RAIZ DE NUESTRO FRAMEWORK
define('ROOT', realpath(dirname(__FILE__)) . DS);
#PATH DE NUESTRA APP
define('APP_PATH', ROOT . 'app' . DS);


#REQUERIR TODOS LOS FICHEROS QUE VAMOS A NECESITAR:
require_once APP_PATH . 'Config.php';
require_once APP_PATH . 'Request.php';
require_once APP_PATH . 'Bootstrap.php';
require_once APP_PATH . 'Controller.php';
require_once APP_PATH . 'Model.php';
require_once APP_PATH . 'View.php';
//require_once APP_PATH . 'Registro.php';
require_once APP_PATH . 'Database.php';

#LLAMAR A BOOTSTRAP PARA INICIAR APLICACION
try {
    Bootstrap::run(new Request);
} catch (Exception $ex) {
    echo $ex->getMessage();
}