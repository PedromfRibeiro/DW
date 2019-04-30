<?php
require "Conexao.php";

class JogoDAL
{

    public function Create(Jogo $jogo){


        $PDO = new Connection();
        $PDO -> Connect();
        $sql = "INSERT INTO genero SET id=:id, nome=:nome,preco=:preco,descricao=:descricao,idGenero=:idGenero, idPlataforma=:idPlataforma ;";
        $PDO -> SQuerry($sql,$jogo);


    }

    public function ReadAll(){
        $db = new Connection();
        $conn= $db -> Connect();
        $sql = "SELECT * FROM `jogo`";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        return $stmt;
    }


    public function Update(Genero $jogo){
        $db = new Connection();
        $db -> Connect();
        $sql = "UPDATE jogo set jogo=:jogo  where id=:id ;";
        $db->SQuerry($sql,$jogo);
    }

    public function Delete(Jogo $jogo){
        $db = new Connection();
        $conn= $db -> Connect();
        $attr = 'id';
        $where = ['id' => ($jogo->$attr)];
        $conn->prepare("DELETE FROM `jogo` WHERE `jogo`.id=:id")->execute($where);
        return $conn;
    }
}
?>