<?php
class Connection
{public $conexao;
    public function Connect(){
        try {
            $conexao = new PDO("mysql:host=localhost; dbname=dwphp","root","" );
            return $conexao;

        } catch (PDOException $erro) {
            echo "Erro na conexão:" . $erro->getMessage();
        }
    }

    public function SQuerry($SQLString,$obj){
        $pdo= $this->Connect();
        $stmte = $pdo->prepare($SQLString);
        $stmte->execute($obj);
        return  $stmte;
    }


}


