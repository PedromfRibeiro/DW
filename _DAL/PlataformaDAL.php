<?php
require_once "Conexao.php";

class PlataformaDAL{

    public function Create(Plataforma $plat){
        $PDO = new Connection();
        $PDO -> Connect();
        $sql = "INSERT INTO plataforma SET id=:id, Plataforma=:Plataforma;";
        return $PDO -> SQuerry($sql,$plat);
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
        return $dbPlat->SQuerry($sql,$plat);
    }
    public function Delete(Plataforma $plat){
    $dbPlat = new Connection();
    $dbPlat -> Connect();
    $sql="DELETE FROM plataforma WHERE id = :id";
    $val = ['id' => ($plat->id)];
    return $dbPlat->SQuerry($sql,$val);
}

}
?>



