<?php
require_once "Conexao.php";


class UtilizadorDAL
{
    public function Create(Utilizador $util)
    {


        $PDO = new Connection();
        $PDO->Connect();
        $sql = "INSERT INTO Utilizador SET idUtilizador=:idUtilizador, Nome=:Nome, Data_Registo=:Data_Registo,Autorizacao=:Autorizacao,Data_Nascimento=:Data_Nascimento,email=:email,;";
        $PDO->SQuerry($sql, $util);
    }
    public function ReadDAL()
    {
        $dbPlat = new Connection();
        $conne = $dbPlat->Connect();
        $sqle = "SELECT * FROM Utilizador";
        $stmte = $conne->prepare($sqle);
        $stmte->execute();
        return $stmte;
    }


    public function ReadALLDAL()
    {
        $dbPlat = new Connection();
        $conne = $dbPlat->Connect();
        $sqle = "SELECT * FROM Utilizador";
        $stmte = $conne->prepare($sqle);
        $stmte->execute();

        return $stmte;
    }


    public function Update(Utilizador $util)
    {
        $dbPlat = new Connection();
        $dbPlat->Connect();
        $sql = "UPDATE Utilizador set Utilizador=:Utilizador  where id=:id ;";
        $dbPlat->SQuerry($sql, $util);
    }

    public function Delete(Utilizador $util)
    {
        $dbPlat = new Connection();
        $conn = $dbPlat->Connect();
        $attr = 'id';
        $where = ['id' => ($util->$attr)];
        $conn->prepare("DELETE FROM `Utilizador` WHERE `Utilizador`.id=:id")->execute($where);
        return $conn;
    }
    public function CreateTable(){
        $dbPlat = new Connection();
        $dbPlat -> Connect();
        $sql="Use dwphp; CREATE TABLE IF NOT EXISTS `utilizador` (  `idUtilizador` int(11) NOT NULL,  `Nome` varchar(45) NOT NULL,  `Data_Registo` datetime(6) NOT NULL,  `Autorizacao` tinyint(4) NOT NULL,  `Data_Nascimento` date NOT NULL,  `email` varchar(45) NOT NULL,  PRIMARY KEY (`idUtilizador`)) ENGINE=InnoDB DEFAULT CHARSET=utf8;";
        return $dbPlat->SQuerry($sql,null);
    }

}