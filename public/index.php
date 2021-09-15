<?php
require_once '../vendor/autoload.php';

require_once '../app/Config/rotas.php';

if(isset($_SERVER['PATH_INFO'])){

    $url = explode('/',$_SERVER['PATH_INFO']);

    if(!key_exists($url[1],$rotas)){
        http_response_code(404);
        die();
    }
    else{
        $u = new $rotas[$url[1]];
        $u->index();
    }

}else{
    http_response_code(404);
    die();
}

