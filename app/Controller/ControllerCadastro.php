<?php
namespace app\Controller;

session_start();

use app\Model\ModelUser;

class ControllerCadastro{
    private $model;
    private $email;

    public function __construct()
    {
        $this->model = new ModelUser();
        $this->email = filter_input(INPUT_POST,"email");
    }

    public function index(){
        if($this->model->insert($this->email)){
            $_SESSION['msg'] = ['text' => "Cadastrado com sucesso!" , 'result' => "success"];
        }
        else{
            $_SESSION['msg'] = ['text' => "ERRO ao cadastrar!" , 'result' => "danger"];
        }
        header("location: /home");
        die();
    }

    
}
