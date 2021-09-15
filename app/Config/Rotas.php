<?php

use app\controller\{ControllerHome, ControllerAtualizar, ControllerDelete,
                    ControllerListar, ControllerCadastro, ControllerFormulario,
                    ControllerPersistir};

$rotas = [
    'cadastrar' => ControllerCadastro::class,
    'FormularioCadastro' => ControllerFormulario::class,
    'home' => ControllerHome::class,
    'deletar' => ControllerDelete::class,
    'atualizar' => ControllerAtualizar::class,
    'atualizarUsuario' => ControllerPersistir::class
];