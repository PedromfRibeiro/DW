<?php
require_once "Conexao.php";

class EncomendaDAl{

    public function CreateDAL(encomenda $Enc){
        $PDO = new Connection();
        $PDO -> Connect();
        $sql = "INSERT INTO encomenda  SET 	idEncomenda=:idEncomenda,data_enc=:data_enc,Finalizada=:Finalizada,id_utilizador=:id_utilizador";
        $val = (array) $Enc;
        return $PDO -> SQuerry($sql,$val);
    }
    public function ReadDAL(encomenda $Enc){
        $dbEnc = new Connection();
        $dbEnc -> Connect();
        $sql="SELECT FROM encomenda WHERE id = :id";
        $val = ['id' => ($Enc->id)];
        return $dbEnc->SQuerry($sql,$val);
    }
    public function ReadALLDAL(){
        $dbEnc = new Connection();
        $dbEnc -> Connect();
        $sql = "SELECT * FROM encomenda";
        return $dbEnc->SQuerry($sql,null);
    }
    public function Update(encomenda $Enc){
        $dbEnc = new Connection();
        $dbEnc -> Connect();
        $sql="UPDATE encomenda set encomenda=:encomenda  where id=:id ";
        $arrayGen = (array) $Enc;
        return $dbEnc->SQuerry($sql,$arrayGen);
    }
    public function Delete(encomenda $Enc){
        $dbEnc = new Connection();
        $dbEnc -> Connect();
        $sql="DELETE FROM encomenda WHERE id = :id";
        $val = ['id' => ($Enc->id)];
        return $dbEnc->SQuerry($sql,$val);
    }

}
?>



