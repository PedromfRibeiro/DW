<?php
require_once dirname(__FILE__)."/Conexao.php";

class VendaDAL
{

    public static function Create(venda $Venda)
    {
        $PDO = new Connection();
        $PDO -> Connect();
        $sql = "INSERT INTO venda SET Data=:Data, Valor=:Valor, quantidade=:quantidade,id_jogo=:id_jogo,id_Encomenda=:id_Encomenda;";
        $val = array(
            'Data' => $Venda->Data,
            'Valor' => $Venda->Valor,
            'quantidade' => $Venda->quantidade,
            'id_jogo' => $Venda->id_jogo,
            'id_Encomenda' => $Venda->id_Encomenda);
        return $PDO -> SQuerry($sql,$val);

    }
    public static function ReadDAL(venda $Venda)
    {
        $dbGen = new Connection();
        $dbGen->Connect();
        $sql = "SELECT * FROM venda WHERE id = :id";
        $val = ['id' => ($Venda->id)];
        return $dbGen->SQuerry($sql, $val);
    }

    public static function ReadALLDAL()
    {
        $dbGen = new Connection();
        $dbGen->Connect();
        $sql = "SELECT * FROM venda";
        return $dbGen->SQuerry($sql, null);
    }

    public static function Update(venda $Venda)
    {
        $dbGen = new Connection();
        $dbGen->Connect();
        $sql = "UPDATE venda set Data=:Data,Valor=:Valor,quantidade=:quantidade,id_jogo=:id_jogo,id_Encomenda=:id_Encomenda  where id=:id ";
        $arrayGen = (array)$Venda;
        return $dbGen->SQuerry($sql, $arrayGen);
    }

    public static function Delete(venda $Venda)
    {
        $dbGen = new Connection();
        $dbGen->Connect();
        $sql = "DELETE FROM venda WHERE id = :id";
        $val = ['id' => ($Venda->idVenda)];
        return $dbGen->SQuerry($sql, $val);
    }

    public static function CreateDB()
    {
        $dbGen = new Connection();
        $dbGen->Connect();
        $sql = "use dwphp; CREATE TABLE IF NOT EXISTS `venda` (  `idVenda` int(11) NOT NULL,  `Data` date NOT NULL,  `Valor` varchar(45) NOT NULL,  `quantidade` int(11) NOT NULL,  `id_jogo` int(11) NOT NULL,  `id_Encomenda` int(11) NOT NULL,  PRIMARY KEY (`idVenda`),  KEY `fk_idJogo_idx` (`id_jogo`),  KEY `fk_id_Encomenda_idx` (`id_Encomenda`)) ENGINE=InnoDB DEFAULT CHARSET=utf8;";
        return $dbGen->SQuerry($sql, null);
    }

    public static function ReadValorDAL(Venda $Obj){
        $dbEnc = new Connection();
        $dbEnc->Connect();
        $sql = "SELECT Valor FROM venda WHERE id_Encomenda=:id_Encomenda";
        $valeu=array('id_Encomenda'=>$Obj->id_Encomenda);
        return $dbEnc->SQuerry($sql, $valeu);
    }


}