<?php
require_once 'C:/xampp/htdocs/DWphp/_BL/Utilizador.php';

class Connection
{
    public $conexao;

    public function Connect(){
        try {
            $conexao = new PDO("mysql:host=localhost; dbname=dwphp","dwphp","dw123");
            $conexao->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            return $conexao;

        } catch (PDOException $erro) {
            echo "Erro na conexão:" . $erro->getMessage();
            die;
        }
    }

    public function SQuerry($SQLString,$obj){
        $pdo= $this->Connect();
        $stmte = $pdo->prepare($SQLString);
        $stmte->execute($obj);
        return  $stmte;
    }

    public function SQuerrys($SQLString,$obj){
        $pdo= $this->Connect();
        $stmte = $pdo->prepare($SQLString);
        $stmte->setFetchMode(PDO::FETCH_CLASS,'Utilizador');
        //$stmte->setFetchMode(PDO::FETCH_OBJ,'Utilizador');
        $stmte->execute($obj);
        return $stmte->fetch(PDO::FETCH_LAZY);
        //return  $stmte->fetchObject();

    }
}


