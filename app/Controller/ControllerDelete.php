<?php
namespace app\Controller;

session_start();

use app\Model\ModelUser;

class ControllerDelete{
    private $model;
    private $id;

    public function __construct()
    {
        $this->model = new ModelUser();
        $this->id = filter_input(INPUT_GET,"id");
    }

    public function index(){
        if($this->model->delete($this->id)){
            $_SESSION['msg'] = ['text' => "Deletado com sucesso!" , 'result' => "success"];
        }
        else{
            $_SESSION['msg'] = ['text' => "ERRO ao deletar!" , 'result' => "danger"];
        }
        header("location: /home");
        die();
    }

    
}
