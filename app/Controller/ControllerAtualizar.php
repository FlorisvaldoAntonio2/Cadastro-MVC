<?php
namespace app\Controller;

use app\Model\ModelUser;
use app\Controller\ControllerListar;

class ControllerAtualizar{
    private $model;
    private $id;

    public function __construct()
    {
        $this->model = new ModelUser();
        $this->id = filter_input(INPUT_GET,'id');
    }

    public function index(){
        $u = new ControllerListar();
        $usuario = $u->selectId($this->id);
        require_once '../app/View/Atualizar.php';
    }

    
}
