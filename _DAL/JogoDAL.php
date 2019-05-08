<?php
require_once "Conexao.php";

class JogoDAL{

    public function Create(Jogo $jog){
        $PDO = new Connection();
        $PDO -> Connect();
        $sql = "INSERT INTO jogo SET idJogo=:idJogo, nome=:nome, preco=:preco, descricao=:descricao,idGenero=:idGenero,idJogo=:idJogo;";
        $arrayGen = (array) $jog;
        return $PDO -> SQuerry($sql,$arrayGen);
    }
    public function ReadDAL(Jogo $jog){
        $dbJogo = new Connection();
        $dbJogo -> Connect();
        $sql="SELECT FROM Jogo WHERE idJogo = :idJogo";
        $val = ['idJogo' => ($jog->idJogo)];
        return $dbJogo->SQuerry($sql,$val);
    }
    public function ReadALLDAL(){
        $dbJogo = new Connection();
        $dbJogo -> Connect();
        $sql = "SELECT * FROM Jogo";
        return $dbJogo->SQuerry($sql,null);
    }
    public function Update(Jogo $jog){
        $dbJogo = new Connection();
        $dbJogo -> Connect();
        $sql="Update jogo SET idJogo=:idJogo, nome=:nome, preco=:preco, descricao=:descricao,idGenero=:idGenero,idJogo=:idJogo  where idJogo=:idJogo ";
        $arrayGen = (array) $jog;
        return $dbJogo->SQuerry($sql,$arrayGen);
    }
    public function Delete(Jogo $jog){
        $dbJogo = new Connection();
        $dbJogo -> Connect();
        $sql="DELETE FROM Jogo WHERE idJogo = :idJogo";
        $val = ['idJogo' => ($jog->idJogo)];
        return $dbJogo->SQuerry($sql,$val);
    }

}
?>
