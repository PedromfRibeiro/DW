<?php
require_once dirname(__FILE__)."/Conexao.php";

class JogoDAL{


    public static function CreateDAL(Jogo $Jogo){
        $PDO = new Connection();
        $PDO -> Connect();
        $sql = "INSERT INTO jogo SET nome=:nome, preco=:preco, descricao=:descricao,idGenero=:idGenero,idPlataforma=:idPlataforma;";
        $val = array(
            'nome' => $Jogo->nome,
            'preco' => $Jogo->preco,
            'descricao' => $Jogo->descricao,
            'idGenero' => $Jogo->idGenero,
            'idPlataforma' => $Jogo->idPlataforma);
        return $PDO -> SQuerry($sql,$val);
    }
    public static function ReadDAL(Jogo $Jogo){
        $dbJogo = new Connection();
        $dbJogo -> Connect();
        $sql="SELECT * FROM Jogo WHERE idJogo =:idJogo";
        $val = array('idJogo' => ($Jogo->idJogo));
        $stm = $dbJogo->SQuerry($sql,$val);
        return  $stm->fetch();
    }
    public static function ReadALLDAL(){
        $dbJogo = new Connection();
        $dbJogo -> Connect();
        $sql = "SELECT * FROM Jogo";
        return $dbJogo->SQuerry($sql,null);
    }
    public static function Update(Jogo $Jogo){
        $dbJogo = new Connection();
        $dbJogo -> Connect();
        $sql="Update jogo SET  nome=:nome, preco=:preco, descricao=:descricao,idGenero=:idGenero,idPlataforma=:idPlataforma where idJogo=:idJogo ";
        $val = array(
            'nome' => $Jogo->nome,
            'preco' => $Jogo->preco,
            'descricao' => $Jogo->descricao,
            'idGenero' => $Jogo->idGenero,
            'idPlataforma' => $Jogo->idPlataforma);
        return $dbJogo->SQuerry($sql,$val);
    }
    public static function Delete(Jogo $Jogo){
        $dbJogo = new Connection();
        $dbJogo -> Connect();
        $sql="DELETE FROM Jogo WHERE idJogo = :idJogo";
        $val = ['idJogo' => ($Jogo->idJogo)];
        return $dbJogo->SQuerry($sql,$val);
    }
    public static function CreateDB(){
        $dbJogo = new Connection();
        $dbJogo -> Connect();
        $sql="use dwphp;CREATE TABLE IF NOT EXISTS `jogo` (  `idJogo` int(11) NOT NULL AUTO_INCREMENT,  `nome` varchar(45) NOT NULL,  `preco` varchar(45) NOT NULL,  `descricao` varchar(45) NOT NULL,  `idGenero` int(11) NOT NULL,  `idPlataforma` int(11) NOT NULL,  PRIMARY KEY (`idJogo`),  KEY `fk_Genero_idx` (`idGenero`),  KEY `fk_Plataforma_idx` (`idPlataforma`)) ENGINE=InnoDB DEFAULT CHARSET=utf8;";
        return $dbJogo->SQuerry($sql,null);
    }

}
?>
