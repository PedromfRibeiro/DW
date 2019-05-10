<?php
require_once "Conexao.php";

class PlataformaDAL{

    public static function Create(Plataforma $plat){
        $PDO = new Connection();
        $PDO -> Connect();
        $sql = "INSERT INTO plataforma SET Plataforma=:Plataforma;";
        $val = ['Plataforma' => $plat->Plataforma];
        return $PDO -> SQuerry($sql,$val);
    }
    public static function ReadDAL(Plataforma $plat){
    $dbPlat = new Connection();
    $dbPlat -> Connect();
    $sql="SELECT id, Plataforma FROM plataforma WHERE id = :id";
    $val = ['id' => ($plat->id)];
    $stm= $dbPlat->SQuerry($sql,$val);
    return  $stm->fetch();

    }
    public static function ReadALLDAL(){
        $dbPlat = new Connection();
        $dbPlat -> Connect();
        $sql = "SELECT * FROM plataforma";
        return $dbPlat->SQuerry($sql,null);
    }
    public static function Update(Plataforma $plat){
        $dbPlat = new Connection();
        $dbPlat -> Connect();
        $sql="UPDATE plataforma set Plataforma=:Plataforma  where id=:id ";
        $arrayGen = (array) $plat;
        return $dbPlat->SQuerry($sql,$arrayGen);
    }
    public static function Delete(Plataforma $plat){
    $dbPlat = new Connection();
    $dbPlat -> Connect();
    $sql="DELETE FROM plataforma WHERE id = :id";
    $val = ['id' => ($plat->id)];
    return $dbPlat->SQuerry($sql,$val);
}
public static function CreateTable(){
    $dbPlat = new Connection();
    $dbPlat -> Connect();
    $sql="Use dwphp; CREATE TABLE IF NOT EXISTS `plataforma` (  `id` int(11) NOT NULL AUTO_INCREMENT,  `Plataforma` varchar(45) NOT NULL,  PRIMARY KEY (`id`))DEFAULT CHARSET=utf8;";
    return $dbPlat->SQuerry($sql,null);}
}
    ?>



