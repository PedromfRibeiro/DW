<?php
require_once "Conexao.php";

class GeneroDAL{

    public function Create(genero $gen){
        $PDO = new Connection();
        $PDO -> Connect();
        $sql = "INSERT INTO genero SET id=:id, genero=:genero;";
        return $PDO -> SQuerry($sql,$gen);
    }
    public function ReadDAL(genero $gen){
        $dbGen = new Connection();
        $dbGen -> Connect();
        $sql="SELECT FROM genero WHERE id = :id";
        $val = ['id' => ($gen->id)];
        return $dbGen->SQuerry($sql,$val);
    }
    public function ReadALLDAL(){
        $dbGen = new Connection();
        $dbGen -> Connect();
        $sql = "SELECT * FROM genero";
        return $dbGen->SQuerry($sql,null);
    }
    public function Update(genero $gen){
        $dbGen = new Connection();
        $dbGen -> Connect();
        $sql="UPDATE genero set genero=:genero  where id=:id ";
        return $dbGen->SQuerry($sql,$gen);
    }
    public function Delete(genero $gen){
        $dbGen = new Connection();
        $dbGen -> Connect();
        $sql="DELETE FROM genero WHERE id = :id";
        $val = ['id' => ($gen->id)];
        return $dbGen->SQuerry($sql,$val);
    }

}
?>



