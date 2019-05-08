<?php
require_once "Conexao.php";

class JogoDAL{


    public function CreateDAL(Jogo $Enc){
        $PDO = new Connection();
        $PDO -> Connect();
        $sql = "INSERT INTO Jogo  SET 	idJogo=:idJogo, nome=:nome, preco=:preco, descricao=:descricao,idGenero=:idGenero,idPlataforma";
        $val = (array) $Enc;
        return $PDO -> SQuerry($sql,$val);
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
        $sql="Update jogo SET idJogo=:idJogo, nome=:nome, preco=:preco, descricao=:descricao,idGenero=:idGenero,idPlataforma=:idPlataforma where idJogo=:idJogo ";
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
