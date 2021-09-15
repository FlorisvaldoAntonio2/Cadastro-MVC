<?php
namespace app\Model;

require_once '../app/Config/Config.php';

class Db{
    public static $conexao;

    public static function getConn(){
        self::$conexao = new \PDO("mysql:host=" . HOST . ";dbname=" . DB, USER , PASS);
        return self::$conexao;
    }
}