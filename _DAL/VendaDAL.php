<?php
require_once "Conexao.php";

class VendaDAL{

    public function Create(venda $Venda){
        $PDO = new Connection();
        $PDO -> Connect();

        $sql = "INSERT INTO venda ( Data, Valor, quantidade, id_jogo, id_Encomenda) VALUES (Data, Valor, quantidade, id_jogo, id_Encomenda);";
        $val = (array) $Venda;
        return $PDO -> SQuerry($sql,$val);
    }
    public function ReadDAL(venda $Venda){
        $dbGen = new Connection();
        $dbGen -> Connect();
        $sql="SELECT * FROM venda WHERE id = :id";
        $val = ['id' => ($Venda->id)];
        return $dbGen->SQuerry($sql,$val);
    }
    public function ReadALLDAL(){
        $dbGen = new Connection();
        $dbGen -> Connect();
        $sql = "SELECT * FROM venda";
        return $dbGen->SQuerry($sql,null);
    }
    public function Update(venda $Venda){
        $dbGen = new Connection();
        $dbGen -> Connect();
        $sql="UPDATE venda set Data=:Data,Valor=:Valor,quantidade=:quantidade,id_jogo=:id_jogo,id_Encomenda=:id_Encomenda  where id=:id ";
        $arrayGen = (array) $Venda;
        return $dbGen->SQuerry($sql,$arrayGen);
    }
    public function Delete(venda $Venda){
        $dbGen = new Connection();
        $dbGen -> Connect();
        $sql="DELETE FROM venda WHERE id = :id";
        $val = ['id' => ($Venda->id)];
        return $dbGen->SQuerry($sql,$val);
    }
    public function CreateDB(){
        $dbGen = new Connection();
        $dbGen -> Connect();
        $sql="use dwphp; CREATE TABLE IF NOT EXISTS `venda` (  `idVenda` int(11) NOT NULL,  `Data` date NOT NULL,  `Valor` varchar(45) NOT NULL,  `quantidade` int(11) NOT NULL,  `id_jogo` int(11) NOT NULL,  `id_Encomenda` int(11) NOT NULL,  PRIMARY KEY (`idVenda`),  KEY `fk_idJogo_idx` (`id_jogo`),  KEY `fk_id_Encomenda_idx` (`id_Encomenda`)) ENGINE=InnoDB DEFAULT CHARSET=utf8;";
        return $dbGen->SQuerry($sql,null);
    }

}
?>



