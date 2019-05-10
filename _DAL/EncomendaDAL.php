<?php
require_once "Conexao.php";

class EncomendaDAl{

    public static function CreateDAL(encomenda $Enc){
        $PDO = new Connection();
        $PDO -> Connect();
        $sql = "INSERT INTO encomenda  SET 	idEncomenda=:idEncomenda,data_enc=:data_enc,Finalizada=:Finalizada,id_utilizador=:id_utilizador";
        $val = (array) $Enc;
        return $PDO -> SQuerry($sql,$val);
    }
    public static function ReadDAL(encomenda $Enc){
        $dbEnc = new Connection();
        $dbEnc -> Connect();
        $sql="SELECT FROM encomenda WHERE id = :id";
        $val = ['id' => ($Enc->idEncomenda)];
        return $dbEnc->SQuerry($sql,$val);
    }
    public static function ReadALLDAL(){
        $dbEnc = new Connection();
        $dbEnc -> Connect();
        $sql = "SELECT * FROM encomenda";
        return $dbEnc->SQuerry($sql,null);
    }
    public static function Update(encomenda $Enc){
        $dbEnc = new Connection();
        $dbEnc -> Connect();
        $sql="UPDATE encomenda set encomenda=:encomenda  where id=:id ";
        $arrayGen = (array) $Enc;
        return $dbEnc->SQuerry($sql,$arrayGen);
    }
    public static function Delete(encomenda $Enc){
        $dbEnc = new Connection();
        $dbEnc -> Connect();
        $sql="DELETE FROM encomenda WHERE idEncomenda = :idEncomenda";
        $val = ['idEncomenda' => ($Enc->idEncomenda)];
        return $dbEnc->SQuerry($sql,$val);
    }

    public function CreateDB(){
        $dbEnc = new Connection();
        $dbEnc -> Connect();
        $sql="USE `dwphp`; CREATE TABLE IF NOT EXISTS `encomenda` (    `idEncomenda` int(11) NOT NULL AUTO_INCREMENT,    `data_enc` date NOT NULL,    `Finalizada` tinyint(4) NOT NULL,    `id_utilizador` int(11) NOT NULL,    PRIMARY KEY (`idEncomenda`),    KEY `fk_id_utilizador_idx` (`id_utilizador`)) ENGINE=InnoDB DEFAULT CHARSET=utf8;";
        return $dbEnc->SQuerry($sql,null);

}

}
?>



