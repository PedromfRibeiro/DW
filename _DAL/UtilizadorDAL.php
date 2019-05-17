<?php
require_once "Conexao.php";


class UtilizadorDAL
{
    public static function CreateDAL(Utilizador $util)
    {


        $PDO = new Connection();
        $PDO->Connect();
        $sql = "INSERT INTO utilizador set Nome=:Nome, pass=:pass, Data_Registo=:Data_Registo, Autorizacao=:Autorizacao,Data_Nascimento=:Data_Nascimento,email=:email;";
        $val =array(
            ':Nome'=>$util->Nome,
            ':pass'=>$util->pass,
            ':Data_Registo'=>$util->Data_Registo,
            ':Autorizacao'=>$util->Autorizacao,
            ':Data_Nascimento'=>$util->Data_Nascimento,
            ':email'=>$util->email);
    $PDO->SQuerry($sql, $val);
    }


    public static function ReadDAL(Utilizador $util)
    {
        $dbUtilizador = new Connection();
        $dbUtilizador -> Connect();
        $sql = "SELECT * FROM Utilizador WHERE email=:email AND pass=:pass";
        $val = [
            ':email'=>$util->email,
            ':pass'=>$util->pass,
        ];
        $stm = $dbUtilizador->SQuerry($sql,$val);
        return $stm->fetch();
    }


    public static function ReadALLDAL()
    {
        $dbUtilizador = new Connection();
        $dbUtilizador->Connect();
        $sql = "SELECT * FROM Utilizador";
        return $dbUtilizador->SQuerry($sql,null);
    }


    public static function Update(Utilizador $util)
    {
        $dbUtilizador = new Connection();
        $dbUtilizador->Connect();
        $sql = "UPDATE Utilizador set Utilizador=:Utilizador  where id=:id ;";
        $arrayGen = (array) $util;
        $dbUtilizador->SQuerry($sql, $arrayGen);
    }

    public static function Delete(Utilizador $util)
    {
        $dbUtilizador = new Connection();
        $dbUtilizador -> Connect();
        $sql="DELETE FROM `Utilizador` WHERE `Utilizador`.id=:id";
        $val = ['id' => ($util->id)];
        return $dbUtilizador->SQuerry($sql,$val);

    }
    public static function CreateTable(){
        $dbUtilizador = new Connection();
        $dbUtilizador -> Connect();
        $sql="Use dwphp; CREATE TABLE IF NOT EXISTS `utilizador` (  `idUtilizador` int(11) NOT NULL,  `Nome` varchar(45) NOT NULL,`pass` varchar(45) NOT NULL , `Data_Registo` date NOT NULL,  `Autorizacao` tinyint(4) NOT NULL,  `Data_Nascimento` date NOT NULL,  `email` varchar(45) NOT NULL,  PRIMARY KEY (`idUtilizador`)) ENGINE=InnoDB DEFAULT CHARSET=utf8;";
        return $dbUtilizador->SQuerry($sql,null);
    }

}