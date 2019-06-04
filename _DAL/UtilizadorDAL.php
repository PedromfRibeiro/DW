<?php
require_once dirname(__FILE__)."/Conexao.php";


class UtilizadorDAL
{
    public static function CreateDAL(Utilizador $util)
    {
        $PDO = new Connection();
        $PDO->Connect();
        $sql = "INSERT INTO utilizador set Nome=:Nome, pass=:pass, Data_Registo=:Data_Registo, Autorizacao=:Autorizacao,Data_Nascimento=:Data_Nascimento,email=:email,code_hash=:code_hash,Verify=:Verify;";
        $val = array(
            ':Nome' => $util->Nome,
            ':pass' => $util->pass,
            ':Data_Registo' => $util->Data_Registo,
            ':Autorizacao' => $util->Autorizacao,
            ':Data_Nascimento' => $util->Data_Nascimento,
            ':code_hash' => $util->code_hash,
            ':Verify' => '0',
            ':email' => $util->email);

        return $PDO->SQuerry($sql, $val);
    }

    public static function ReadDAL(Utilizador $util)
    {
        $dbUtilizador = new Connection();
        $dbUtilizador->Connect();
        $sql = "SELECT * FROM Utilizador WHERE email=:email AND pass=:pass";
        $val = [
            ':email' => $util->email,
            ':pass' => $util->pass,
        ];
        $statment = $dbUtilizador->SQuerry($sql, $val);
        return $statment->fetch(PDO::FETCH_ASSOC);

    }

    public static function ReadALLDAL()
    {
        $dbUtilizador = new Connection();
        $dbUtilizador->Connect();
        $sql = "SELECT * FROM Utilizador";
        return $dbUtilizador->SQuerry($sql, null);
    }

    public static function UpdateDAL(Utilizador $util)
    {
        $dbUtilizador = new Connection();
        $dbUtilizador->Connect();
        $sql = "UPDATE utilizador set Nome=:Nome, pass=:pass, Data_Registo=:Data_Registo, Autorizacao=:Autorizacao,Data_Nascimento=:Data_Nascimento,email=:email,code_hash=:code_hash,Verify=:Verify  where email=:email ;";
        $val = array(
            ':Nome' => $util->Nome,
            ':pass' => $util->pass,
            ':Data_Registo' => $util->Data_Registo,
            ':Autorizacao' => $util->Autorizacao,
            ':Data_Nascimento' => $util->Data_Nascimento,
            ':code_hash' => $util->code_hash,
            ':Verify' => '0',
            ':email' => $util->email);
        return  $dbUtilizador->SQuerry($sql, $val);



    }

    public static function DeleteDAL(Utilizador $util)
    {
        $dbUtilizador = new Connection();
        $dbUtilizador->Connect();
        $sql = "DELETE FROM utilizador WHERE idUtilizador=:idUtilizador";
        $val = ['idUtilizador' => ($util->idUtilizador)];
        return $dbUtilizador->SQuerry($sql, $val);

    }


    public static function CreateTable()
    {
        $dbUtilizador = new Connection();
        $dbUtilizador->Connect();
        $sql = "Use dwphp; CREATE TABLE IF NOT EXISTS `utilizador` (  `idUtilizador` int(11) NOT NULL,  `Nome` varchar(45) NOT NULL,`pass` varchar(45) NOT NULL , `Data_Registo` date NOT NULL,  `Autorizacao` tinyint(4) NOT NULL,  `Data_Nascimento` date NOT NULL,  `email` varchar(45) NOT NULL,  PRIMARY KEY (`idUtilizador`)) ENGINE=InnoDB DEFAULT CHARSET=utf8;";
        return $dbUtilizador->SQuerry($sql, null);
    }


    public static function ReadEmailDAL(Utilizador $util)
    {
        $dbUtilizador = new Connection();
        $dbUtilizador -> Connect();
        $sql = "SELECT * FROM Utilizador WHERE email=:email ";
        $val = [
            ':email'=>$util->email,
        ];
        $stm = $dbUtilizador->SQuerry($sql,$val);
        return $stm->fetch();
    }
    public static function ReadEmailOBJDAL(Utilizador $util)
    {
        $User = new Utilizador();
        $dbUtilizador = new Connection();
        $dbUtilizador->Connect();
        $sql = "SELECT * FROM Utilizador where email=:email";
        $val = [
            ':email' => $util->email,
        ];
        $stmt = $dbUtilizador->SQuerry($sql,$val);
        $stmt->setFetchMode(PDO::FETCH_INTO,$User);
        $User=$stmt->fetch();
        return $User;


    }

    public static function ReadEmailHashDAL(Utilizador $util)
    {
        $dbUtilizador = new Connection();
        $dbUtilizador->Connect();
        $sql = "SELECT * FROM Utilizador WHERE email=:email AND code_hash=:code_hash";
        $val = [
            ':email' => $util->email,
            ':code_hash' => $util->code_hash,
        ];
        $stm = $dbUtilizador->SQuerry($sql, $val);
        return $stm->fetch();
    }

    public static function ReadVerifyDAL(Utilizador $util)
    {
        $dbUtilizador = new Connection();
        $dbUtilizador->Connect();
        $sql = "SELECT * FROM Utilizador WHERE email=:email AND code_hash=:code_hash And Verify='0'";
        $val = [
            ':email' => $util->email,
            ':code_hash' => $util->code_hash,
        ];
        $stm = $dbUtilizador->SQuerry($sql, $val);
        return $stm->fetch();
    }

    public static function UpdateVerifyDAL(Utilizador $util)
    {
        $dbUtilizador = new Connection();
        $dbUtilizador->Connect();
        $sql = "UPDATE Utilizador set Verify=:Verify , code_hash=:code_hash where email=:email ;";
        $val = array(
            ':email' => $util->email,
            ':code_hash' => $util->code_hash,
            ':Verify' => $util->Verify);
        return $dbUtilizador->SQuerry($sql, $val);
    }


}