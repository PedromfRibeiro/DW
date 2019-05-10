<?php
require_once "Conexao.php";

class PlataformaDAL{

    public function Create(Plataforma $plat){
        $PDO = new Connection();
        $PDO -> Connect();
        $sql = "INSERT INTO plataforma SET Plataforma=:Plataforma;";
        $val = ['Plataforma' => $plat->Plataforma];
        return $PDO -> SQuerry($sql,$val);
    }
    public function ReadDAL(Plataforma $plat){
    $dbPlat = new Connection();
    $dbPlat -> Connect();
    $sql="SELECT FROM plataforma WHERE id = :id";
    $val = ['id' => ($plat->id)];
    return $dbPlat->SQuerry($sql,$val);
    }
    public function ReadALLDAL(){
        $dbPlat = new Connection();
        $dbPlat -> Connect();
        $sql = "SELECT * FROM plataforma";
        return $dbPlat->SQuerry($sql,null);
    }
    public function Update(Plataforma $plat){
        $dbPlat = new Connection();
        $dbPlat -> Connect();
        $sql="UPDATE plataforma set Plataforma=:Plataforma  where id=:id ";
        $arrayGen = (array) $plat;
        return $dbPlat->SQuerry($sql,$arrayGen);
    }
    public function Delete(Plataforma $plat){
    $dbPlat = new Connection();
    $dbPlat -> Connect();
    $sql="DELETE FROM plataforma WHERE id = :id";
    $val = ['id' => ($plat->id)];
    return $dbPlat->SQuerry($sql,$val);
}
public function CreateTable(){
    $dbPlat = new Connection();
    $dbPlat -> Connect();
    $sql="Use dwphp; CREATE TABLE IF NOT EXISTS `plataforma` (  `id` int(11) NOT NULL AUTO_INCREMENT,  `Plataforma` varchar(45) NOT NULL,  PRIMARY KEY (`id`))DEFAULT CHARSET=utf8;";
    return $dbPlat->SQuerry($sql,null);}
}
    ?>



