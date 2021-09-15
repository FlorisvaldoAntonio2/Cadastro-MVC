<?php
namespace app\Controller;

use app\Model\ModelUser;

class ControllerListar{
    private $model;

    public function __construct()
    {
        $this->model = new ModelUser();

    }

    public function index(){
        return $this->model->selectAll();
    }

    public function selectId(int $id){
        return $this->model->selectId($id);
    }

    public function selectName(string $nome){
        return $this->model->selectName($nome);
    }


    
}
