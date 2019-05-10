<?php
require_once "Conexao.php";

class JogoDAL{


    public function CreateDAL(Jogo $Jogo){
        $PDO = new Connection();
        $PDO -> Connect();
        $sql = "INSERT INTO jogo SET idJogo=:idJogo, nome=:nome, preco=:preco, descricao=:descricao,idGenero=:idGenero,idPlataforma=:idPlataforma;";
        $val = (array) $Jogo;

        return $PDO -> SQuerry($sql,$val);
    }
    public function ReadDAL(Jogo $Jogo){
        $dbJogo = new Connection();
        $dbJogo -> Connect();
        $sql="SELECT * FROM Jogo WHERE idJogo = :idJogo";
        $val = ['idJogo' => ($Jogo->idJogo)];
        return $dbJogo->SQuerry($sql,$val);
    }
    public function ReadALLDAL(){
        $dbJogo = new Connection();
        $dbJogo -> Connect();
        $sql = "SELECT * FROM Jogo";
        return $dbJogo->SQuerry($sql,null);
    }
    public function Update(Jogo $Jogo){
        $dbJogo = new Connection();
        $dbJogo -> Connect();
        $sql="Update jogo SET idJogo=:idJogo, nome=:nome, preco=:preco, descricao=:descricao,idGenero=:idGenero,idPlataforma=:idPlataforma where idJogo=:idJogo ";
        $arrayGen = (array) $Jogo;
        return $dbJogo->SQuerry($sql,$arrayGen);
    }
    public function Delete(Jogo $Jogo){
        $dbJogo = new Connection();
        $dbJogo -> Connect();
        $sql="DELETE FROM Jogo WHERE idJogo = :idJogo";
        $val = ['idJogo' => ($Jogo->idJogo)];
        return $dbJogo->SQuerry($sql,$val);
    }

}
?>
