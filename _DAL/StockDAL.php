<?php
require_once dirname(__FILE__)."/Conexao.php";


class StockDAL
{

    public static function Create(Stock $stock){
        $PDO = new Connection();
        $PDO -> Connect();
        $sql = "INSERT INTO stock SET  quantidade=:quantidade, idJogo=:idJogo;";
        $val = array('quantidade' => $stock->quantidade,
                     'idJogo' =>$stock->idJogo);
        return $PDO -> SQuerry($sql,$val);
    }
    public static function ReadDAL(Stock $stock){
        $dbstock = new Connection();
        $dbstock -> Connect();
        $sql ="SELECT FROM Stock WHERE idStock = :idStock";
        $val = ['idStock' => ($stock->idStock)];
        $stm = $dbstock->SQuerry($sql,$val);
        return  $stm->fetch();
    }
    public static function ReadALLDAL(){
        $dbstock = new Connection();
        $dbstock -> Connect();
        $sql = "SELECT * FROM Stock";
        return $dbstock->SQuerry($sql,null);
    }
    public static function Update(Stock $stock){
        $dbstock = new Connection();
        $dbstock -> Connect();
        $sql="UPDATE Stock set quantidade=:quantidade, idJogo=:idJogo where idStock=:idStock ";
        $val = array('quantidade' => $stock->quantidade,
            'idJogo' =>$stock->idJogo);
        return $dbstock->SQuerry($sql,$val);
    }
    public static function Delete(Stock $stock){
        $dbstock = new Connection();
        $dbstock -> Connect();
        $sql="DELETE FROM Stock WHERE idStock = :idStock";
        $val = ['idStock' => ($stock->idStock)];
        return $dbstock->SQuerry($sql,$val);
    }
    public static function CreateTable(){
        $dbstock = new Connection();
        $dbstock -> Connect();
        $sql="use dwphp;CREATE TABLE IF NOT EXISTS `stock` (  `idStock` int(11) NOT NULL AUTO_INCREMENT,  `quantidStockade` varchar(45) NOT NULL,  `idStockJogo` int(11) NOT NULL,  PRIMARY KEY (`idStock`),  KEY `fk_idStockJogo_idStockx` (`idStockJogo`)) ENGINE=InnoDB DEFAULT CHARSET=utf8;";
        return $dbstock->SQuerry($sql,null);
    }

    public static function ReadIdJogoDAL(Stock $stock){
        $dbstock = new Connection();
        $dbstock -> Connect();
        $sql = "SELECT quantidade FROM stock WHERE idJogo=:idJogo";
        $val = ['idJogo' => ($stock->idJogo)];
        return $dbstock->SQuerry($sql,$val);

    }

}