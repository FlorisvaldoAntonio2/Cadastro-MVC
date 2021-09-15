<?php
namespace app\Model;
require_once "../app/Model/Db.php";

class ModelUser{
    private $conexao;

    public function __construct()
    {
        $this->conexao = Db::getConn();
    }

    public function insert(STRING $email)
    {
        
        $stmt = $this->conexao->prepare("INSERT INTO user (id,email) VALUES (null, :EMAIL)");
        $stmt->bindValue(':EMAIL',$email);
        $stmt->execute();
        if($stmt->rowCount() == 1){
            return true;
        }
        else{
            return false;
            
        }
    }

    public function delete(INT $id){
    
        $stmt = $this->conexao->prepare("DELETE FROM user WHERE id = :ID");
        $stmt->bindValue(':ID',$id);
        $stmt->execute();
        if($stmt->rowCount() > 0){  
            return true;
        }
        else{
            return false;
            
        }
    }

    public function update(INT $id , STRING $email){
    
        $stmt = $this->conexao->prepare("UPDATE user SET email = :EMAIL WHERE id = :ID");
        $stmt->bindValue(':ID',$id);
        $stmt->bindValue(':EMAIL',$email);
        $stmt->execute();
        if($stmt->rowCount() > 0){  
            return true;
        }
        else{
            return false;
            
        }
    }

    public function selectAll(){
    
        $stmt = $this->conexao->prepare("SELECT * FROM user");
        
        $stmt->execute();
        if($stmt->rowCount() > 0){
            return $stmt->fetchAll(\PDO::FETCH_ASSOC);
        }
        else{
            return ['Não encontrado!'];
            
        }
    }

    public function selectId(INT $id = null){
    
        $stmt = $this->conexao->prepare("SELECT * FROM user WHERE id = :ID");
        $stmt->bindValue(':ID',$id);
        $stmt->execute();
        if($stmt->rowCount() > 0){
            return $stmt->fetchAll(\PDO::FETCH_ASSOC);
        }
        else{
            return ['Não encontrado!'];
            
        }
    }

    public function selectName(STRING $nome = null){
        $nomeFormatado = $nome . "%";
        $stmt = $this->conexao->prepare("SELECT * FROM user WHERE email LIKE :NOME");
        $stmt->bindValue(':NOME',$nomeFormatado);
        $stmt->execute();
        if($stmt->rowCount() > 0){
            return $stmt->fetchAll(\PDO::FETCH_ASSOC);
        }
        else{
            return ['Não encontrado!'];
            
        }
    }
}