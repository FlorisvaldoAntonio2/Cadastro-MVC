<?php
namespace app\Controller;

session_start();

use app\Model\ModelUser;

class ControllerPersistir{
    private $model;
    private $id;
    private $email;

    public function __construct()
    {
        $this->model = new ModelUser();
        $this->id = filter_input(INPUT_POST,"id");
        $this->email = filter_input(INPUT_POST,"email");
    }

    public function index(){
        if($this->model->update($this->id, $this->email)){
            $_SESSION['msg'] = ['text' => "Atualizado com sucesso!" , 'result' => "success"];
        }
        else{
            $_SESSION['msg'] = ['text' => "ERRO ao atualizar!" , 'result' => "danger"];
        }
        header("location: /home");
        die();
    }

    
}
