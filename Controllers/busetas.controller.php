<?php
require_once 'Model/busetas.php';
class busetasController {
    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new busetas();
    }
    
    public function Index(){
        require_once 'View/Header.php';
        require_once 'View/busetas/css.php';
        require_once 'View/nav.php';
        require_once 'View/busetas/busetas.php';
        require_once 'View/Footer.php';
    }
}
