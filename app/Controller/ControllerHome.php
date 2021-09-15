<?php
namespace app\Controller;

use app\Controller\ControllerListar;

class ControllerHome{

    public function index(){
        $u = new ControllerListar();

        if(filter_input(INPUT_GET,'busca')){
            $usuarios = $u->selectName(filter_input(INPUT_GET,'busca'));  
        }
        else{
            $usuarios = $u->index();
        }
        
        
        require_once '../app/View/Home.php';
    }

    
}
