<?php
require_once "Conexao.php";

class JogoDAL{
    public function Create(jogo $jog){
        $PDO = new Connection();
        $PDO -> Connect();
        $sql = "INSERT INTO jogo SET id=:id, nome=:nome, preco=:preco, descricao=:descricao,idGenero=:idGenero,idPlataforma=:idPlataforma;";
        return $PDO -> SQuerry($sql,$jog);
    }
    public function ReadDAL(jogo $jog){
        $dbJogo = new Connection();
        $dbJogo -> Connect();
        $sql="SELECT FROM jogo WHERE id = :id";
        $val = ['id' => ($jog->id)];
        return $dbJogo->SQuerry($sql,$val);
    }
    public function ReadALLDAL(){
        $dbJogo = new Connection();
        $dbJogo -> Connect();
        $sql = "SELECT * FROM jogo";
        return $dbJogo->SQuerry($sql,null);
    }
    public function Update(jogo $jog){
        $dbJogo = new Connection();
        $dbJogo -> Connect();
        $sql="UPDATE jogo set jogo=:jogo  where id=:id ";
        return $dbJogo->SQuerry($sql,$jog);
    }
    public function Delete(jogo $jog){
        $dbJogo = new Connection();
        $dbJogo -> Connect();
        $sql="DELETE FROM jogo WHERE id = :id";
        $val = ['id' => ($jog->id)];
        return $dbJogo->SQuerry($sql,$val);
    }

}
?>



