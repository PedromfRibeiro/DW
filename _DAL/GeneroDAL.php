<?php
require_once dirname(__FILE__)."/Conexao.php";

class generoDAL{

    public static function CreateDAL(genero $Gen){
        $PDO = new Connection();
        $PDO -> Connect();
        $sql = "INSERT INTO genero SET genero=:genero,ImagemGen=:ImagemGen;";
        $val = array(
            'genero' => $Gen->genero,
            'ImagemGen'=>$Gen->ImagemGen
        );
        return $PDO -> SQuerry($sql,$val);
    }
    public static function ReadDAL(genero $Gen){
        $dbGen = new Connection();
        $dbGen -> Connect();
        $sql="SELECT * FROM genero WHERE idGenero=:idGenero";
        $val = array(':idGenero' => ($Gen->idGenero));
        $stm = $dbGen->SQuerry($sql,$val);
        return  $stm->fetch();
    }
    public static function ReadALLDAL(){
        $dbGen = new Connection();
        $dbGen -> Connect();
        $sql = "SELECT * FROM genero";
        return $dbGen->SQuerry($sql,null);
    }
    public static function Update(genero $Gen){
        $dbGen = new Connection();
        $dbGen -> Connect();
        $sql="UPDATE genero set genero=:genero,ImagemGen=:ImagemGen  where idGenero=:idGenero ";
        $val = array(
            ':idGenero' => $Gen->idGenero,
            'genero' => $Gen->genero,
            'ImagemGen'=>$Gen->ImagemGen,
    );
        return $dbGen->SQuerry($sql,$val);
    }
    public static function Delete(genero $Gen){
        $dbGen = new Connection();
        $dbGen -> Connect();
        $sql="DELETE FROM genero WHERE idGenero = :idGenero";
        $val = ['idGenero' => ($Gen->idGenero)];
        return $dbGen->SQuerry($sql,$val);
    }
    public static function CreateTable(){
        $dbGen = new Connection();
        $dbGen -> Connect();
        $sql="Use dwphp; CREATE TABLE IF NOT EXISTS `genero` (  `idGenero` int(11) NOT NULL AUTO_INCREMENT,  `genero` varchar(45) NOT NULL,  PRIMARY KEY (`idGenero`)) ENGINE=InnoDB DEFAULT CHARSET=utf8;";
        return $dbGen->SQuerry($sql,null);
    }
}



