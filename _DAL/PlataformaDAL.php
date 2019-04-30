<?php
require "Conexao.php";
//require_once dirname( __FILE__) ."/Conexao.php";

class PlataformaDAL{

    public function Create(Plataforma $plataforma){


        $PDO = new Connection();
        $PDO -> Connect();
        $sql = "INSERT INTO genero SET id=:id, plataforma=:plataforma;";
        $PDO -> SQuerry($sql,$plataforma);


    }

    public function ReadAll(){
        $db = new Connection();
        $conn= $db -> Connect();
        $sql = "SELECT * FROM `plataforma`";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        return $stmt;
    }


    public function Update(Plataforma $plataforma){
        $db = new Connection();
        $db -> Connect();
        $sql = "UPDATE plataforma set plataforma=:plataforma  where id=:id ;";
        $db->SQuerry($sql,$plataforma);
    }

    public function Delete(Plataforma $plataforma){
        $db = new Connection();
        $conn= $db -> Connect();
        $attr = 'id';
        $where = ['id' => ($plataforma->$attr)];
        $conn->prepare("DELETE FROM `plataforma` WHERE `plataforma`.id=:id")->execute($where);
        return $conn;
    }
}
?>



