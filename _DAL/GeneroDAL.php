<?php
require "Conexao.php";
//require_once dirname( __FILE__) ."/Conexao.php";

class GeneroDAL{

    public function Create(Genero $genero){


        $PDO = new Connection();
        $PDO -> Connect();
        $sql = "INSERT INTO genero SET id=:id, genero=:genero;";
        $PDO -> SQuerry($sql,$genero);


    }

    public function ReadAll(){
        $db = new Connection();
        $conn= $db -> Connect();
        $sql = "SELECT * FROM `genero`";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        return $stmt;
    }


    public function Update(Genero $genero){
        $db = new Connection();
        $db -> Connect();
        $sql = "UPDATE genero set genero=:genero  where id=:id ;";
        $db->SQuerry($sql,$genero);
    }

public function Delete(Genero $genero){
    $db = new Connection();
    $conn= $db -> Connect();
    $attr = 'id';
    $where = ['id' => ($genero->$attr)];
    $conn->prepare("DELETE FROM `genero` WHERE `genero`.id=:id")->execute($where);
    return $conn;
}
}
?>



