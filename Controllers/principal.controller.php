<?php
require_once 'Model/principal.php';
class PrincipalController {
    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new principal();
    }
    
    public function Index(){
        require_once 'View/Header.php';
        require_once 'View/principal/css.php';
        require_once 'View/nav.php';
        require_once 'View/principal/principal.php';
        require_once 'View/Footer.php';
    }
    
}
