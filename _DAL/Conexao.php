<?php
class Connection
{
    public function Connect(){
        try {
            $conexao = new PDO("mysql:host=localhost; dbname=dwphp","root","" );
            return $conexao;

        } catch (PDOException $erro) {
            echo "Erro na conexão:" . $erro->getMessage();
        }
    }


    public function NSQuerry($SQLString){
        $pdo= $this->Connect();
        return  $pdo->prepare($SQLString)->execute();
    }



    public function SQuerry($SQLString,Genero $genero){
        $pdo= $this->Connect();
        $arrayGen = (array) $genero;
       return  $pdo->prepare($SQLString)->execute($arrayGen);



    }

    public function close(){
        $this->close();
    }

}