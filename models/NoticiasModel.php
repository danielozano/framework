<?php

class NoticiasModel extends Model{
    function __construct(){
        parent::__construct();
    }
    
    public function getAllNoticias(){
        return $this->_db->query("SELECT * FROM noticias")->fetchall();
    }

    public function insertNoticia($tittle ="",$body=""){
        //REALIZAR QUERY;
    }

}