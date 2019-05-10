<?php


class StockDAL
{

    public static function Create(Stock $stock){
        $PDO = new Connection();
        $PDO -> Connect();
        $sql = "INSERT INTO stock SET idStock=:idStock, quantidade=:quantidade, idJogo=:idJogo;";
        $arrayStock = (array) $stock;
        return $PDO -> SQuerry($sql,$arrayStock);
    }
    public static function ReadDAL(Stock $stock){
        $dbstock = new Connection();
        $dbstock -> Connect();
        $sql ="SELECT FROM Stock WHERE id = :id";
        $val = ['id' => ($stock->id)];
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
        $sql="UPDATE Stock set Stock=:Stock  where id=:id ";
        $arrayStock = (array) $stock;
        return $dbstock->SQuerry($sql,$arrayStock);
    }
    public static function Delete(Stock $stock){
        $dbstock = new Connection();
        $dbstock -> Connect();
        $sql="DELETE FROM Stock WHERE id = :id";
        $val = ['id' => ($stock->id)];
        return $dbstock->SQuerry($sql,$val);
    }
    public static function CreateTable(){
        $dbstock = new Connection();
        $dbstock -> Connect();
        $sql="use dwphp;CREATE TABLE IF NOT EXISTS `stock` (  `idStock` int(11) NOT NULL AUTO_INCREMENT,  `quantidade` varchar(45) NOT NULL,  `idJogo` int(11) NOT NULL,  PRIMARY KEY (`idStock`),  KEY `fk_idJogo_idx` (`idJogo`)) ENGINE=InnoDB DEFAULT CHARSET=utf8;";
        return $dbstock->SQuerry($sql,null);
    }
}