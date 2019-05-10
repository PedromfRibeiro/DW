<?php
require_once "Conexao.php";


class UtilizadorDAL
{
    public static function Create(Utilizador $util)
    {


        $PDO = new Connection();
        $PDO->Connect();
        $sql = "INSERT INTO Utilizador SET idUtilizador=:idUtilizador, Nome=:Nome, Data_Registo=:Data_Registo,Autorizacao=:Autorizacao,Data_Nascimento=:Data_Nascimento,email=:email,;";
        $PDO->SQuerry($sql, $util);
    }
    public static function ReadDAL()
    {
        $dbUtilizador = new Connection();
        $dbUtilizador -> Connect();
        $sql = "SELECT * FROM Utilizador";
        $stm = $dbUtilizador->SQuerry($sql,null);
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
        $dbUtilizador->SQuerry($sql, $util);
    }

    public static function Delete(Utilizador $util)
    {
        $dbUtilizador = new Connection();
        $conn = $dbUtilizador->Connect();
        $attr = 'id';
        $where = ['id' => ($util->$attr)];
        $conn->prepare("DELETE FROM `Utilizador` WHERE `Utilizador`.id=:id")->execute($where);
        return $conn;
    }
    public static function CreateTable(){
        $dbUtilizador = new Connection();
        $dbUtilizador -> Connect();
        $sql="Use dwphp; CREATE TABLE IF NOT EXISTS `utilizador` (  `idUtilizador` int(11) NOT NULL,  `Nome` varchar(45) NOT NULL,  `Data_Registo` datetime(6) NOT NULL,  `Autorizacao` tinyint(4) NOT NULL,  `Data_Nascimento` date NOT NULL,  `email` varchar(45) NOT NULL,  PRIMARY KEY (`idUtilizador`)) ENGINE=InnoDB DEFAULT CHARSET=utf8;";
        return $dbUtilizador->SQuerry($sql,null);
    }

}