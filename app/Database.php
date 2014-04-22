<?php

class Database extends PDO {
    #PARAMETROS DE CONFIGURACIÓN PARA CONEXION A LA BD

    private $_HOST = 'localhost';
    private $_DBNAME = 'test';
    private $_DBUSER = 'root';
    private $_DBPASS = 'usuario';
    private $_DBCHAR = 'utf8';

    function __construct() {
        parent::__construct(
                'mysql:host=' . $this->_HOST .
            ';dbname=' . $this->_DBNAME,
            $this->_DBUSER, 
            $this->_DBPASS, 
            array(
                PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES '. $this->_DBCHAR
                ));        
    }

}
