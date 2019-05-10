<?php
require_once "Conexao.php";

class generoDAL{

    public function Create(genero $Gen){
        $PDO = new Connection();
        $PDO -> Connect();
        $sql = "INSERT INTO genero SET genero=:genero;";
        $val = ['genero' => $Gen->genero];
        return $PDO -> SQuerry($sql,$val);
    }
    public function ReadDAL(genero $Gen){
        $dbGen = new Connection();
        $dbGen -> Connect();
        $sql="SELECT FROM genero WHERE id = :id";
        $val = ['id' => ($Gen->id)];
        return $dbGen->SQuerry($sql,$val);
    }
    public function ReadALLDAL(){
        $dbGen = new Connection();
        $dbGen -> Connect();
        $sql = "SELECT * FROM genero";
        return $dbGen->SQuerry($sql,null);
    }
    public function Update(genero $Gen){
        $dbGen = new Connection();
        $dbGen -> Connect();
        $sql="UPDATE genero set genero=:genero  where id=:id ";
        $arrayGen = (array) $Gen;
        return $dbGen->SQuerry($sql,$arrayGen);
    }
    public function Delete(genero $Gen){
        $dbGen = new Connection();
        $dbGen -> Connect();
        $sql="DELETE FROM genero WHERE id = :id";
        $val = ['id' => ($Gen->id)];
        return $dbGen->SQuerry($sql,$val);
    }
    public function CreateTable(){
        $dbGen = new Connection();
        $dbGen -> Connect();
        $sql="Use dwphp; CREATE TABLE IF NOT EXISTS `genero` (  `idGenero` int(11) NOT NULL AUTO_INCREMENT,  `genero` varchar(45) NOT NULL,  PRIMARY KEY (`idGenero`)) ENGINE=InnoDB DEFAULT CHARSET=utf8;";
        return $dbGen->SQuerry($sql,null);
    }

}
?>



