<?php
require_once "Conexao.php";


class Utilizador
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


}