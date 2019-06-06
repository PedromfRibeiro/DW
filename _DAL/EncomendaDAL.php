<?php
require_once dirname(__FILE__) . "/Conexao.php";

class EncomendaDAL
{

    public static function CreateDAL(encomenda $Enc)
    {
        $PDO = new Connection();
        $PDO->Connect();
        $sql = "INSERT INTO encomenda  SET 	idEncomenda=:idEncomenda,data_enc=:data_enc,Valor=:Valor,Finalizada=:Finalizada,id_utilizador=:id_utilizador";
        $val = array(
            'idEncomenda' => $Enc->idEncomenda,
            'data_enc' => $Enc->data_enc,
            'Valor'=>$Enc->Valor,
            'Finalizada' => $Enc->Finalizada,
            'id_utilizador' => $Enc->id_utilizador);
        return $PDO->SQuerry($sql, $val);
    }

    public static function ReadDAL(encomenda $Enc)
    {
        $dbEnc = new Connection();
        $dbEnc->Connect();
        $sql = "SELECT * FROM encomenda WHERE idEncomenda =:idEncomenda";
        $val = array(
            'idEncomenda' => $Enc->idEncomenda);
        $stm = $dbEnc->SQuerry($sql, $val);
        return $stm->fetch();
    }

    public static function ReadALLDAL()
    {
        $dbEnc = new Connection();
        $dbEnc->Connect();
        $sql = "SELECT * FROM encomenda";
        return $dbEnc->SQuerry($sql, null);
    }

    public static function Update(encomenda $Enc)
    {
        $dbEnc = new Connection();
        $dbEnc->Connect();
        $sql = "UPDATE encomenda set data_enc=:data_enc,Valor=:Valor,Finalizada=:Finalizada,id_utilizador=:id_utilizador  where idEncomenda=:idEncomenda ";
        $val = array(
            'idEncomenda' => $Enc->idEncomenda,
            'data_enc' => $Enc->data_enc,
            'Valor' => $Enc->Valor,
            'Finalizada' => $Enc->Finalizada,
            'id_utilizador' => $Enc->id_utilizador,
        );
        return $dbEnc->SQuerry($sql, $val);
    }

    public static function Delete(encomenda $Enc)
    {
        $dbEnc = new Connection();
        $dbEnc->Connect();
        $sql = "DELETE FROM encomenda WHERE idEncomenda = :idEncomenda";
        $val = ['idEncomenda' => ($Enc->idEncomenda)];
        return $dbEnc->SQuerry($sql, $val);
    }

    public static function CreateDB()
    {
        $dbEnc = new Connection();
        $dbEnc->Connect();
        $sql = "USE `dwphp`; CREATE TABLE IF NOT EXISTS`encomenda`(`idEncomenda` int(11) NOT NULL AUTO_INCREMENT,`data_enc` date NOT NULL,`Finalizada` tinyint(4) NOT NULL,`id_utilizador` int(11) NOT NULL,PRIMARY KEY (`idEncomenda`),KEY `fk_id_utilizador_idx` (`id_utilizador`)) ENGINE=InnoDB DEFAULT CHARSET=utf8;ADD CONSTRAINT `fk_id_utilizador` FOREIGN KEY (`id_utilizador`) REFERENCES `utilizador` (`idUtilizador`) ON DELETE NO ACTION ON UPDATE NO ACTION;";
        return $dbEnc->SQuerry($sql, null);

    }

    public static function CheckCarrinhoDAL(Encomenda $Enc)
    {
        $dbEnc = new Connection();
        $dbEnc->Connect();
        $sql = "SELECT * FROM encomenda WHERE id_utilizador = :id_utilizador and Finalizada=0";
        $val = ['id_utilizador' => ($Enc->id_utilizador)];
        $stm = $dbEnc->SQuerry($sql, $val);
        return $stm->fetch();

    }
public static function UpdateValorDAL(encomenda $Enc){
    $dbEnc = new Connection();
    $dbEnc->Connect();
    $sql = "UPDATE encomenda set Valor=:Valor  where idEncomenda=:idEncomenda ";
    $val = array(
        ':Valor' =>$Enc->Valor,
        ':idEncomenda' =>$Enc->idEncomenda
    );
    return $dbEnc->SQuerry($sql, $val);

}

    public static function ReadUtilizadorDAL(encomenda $Enc)
    {
        $dbEnc = new Connection();
        $dbEnc->Connect();
        $sql = "SELECT * FROM encomenda WHERE id_utilizador =:id_utilizador and Finalizada=0";
        $val = array(
            'id_utilizador' => $Enc->id_utilizador);
        $stm = $dbEnc->SQuerry($sql, $val);
        return $stm->fetch();
    }
    public static function UpdateCarrinhoDAL(encomenda $Enc)
    {
        $dbEnc = new Connection();
        $dbEnc->Connect();
        $sql = "UPDATE encomenda set idEncomenda=:idEncomenda,Valor=:Valor,Finalizada=:Finalizada  where idEncomenda=:idEncomenda ";
        $val = array(
            ':idEncomenda' => $Enc->idEncomenda,
            ':Valor' => $Enc->Valor,
            ':Finalizada' => $Enc->Finalizada,
        );
        return $dbEnc->SQuerry($sql, $val);
    }

}