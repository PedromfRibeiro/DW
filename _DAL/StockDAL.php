<?php


class StockDAL
{

    public function Create(Stock $stock){
        $PDO = new Connection();
        $PDO -> Connect();
        $sql = "INSERT INTO stock SET idStock=:idStock, quantidade=:quantidade, idJogo=:idJogo;";
        $arrayStock = (array) $stock;
        return $PDO -> SQuerry($sql,$arrayStock);
    }
    public function ReadDAL(Stock $stock){
        $dbstock = new Connection();
        $dbstock -> Connect();
        $sql="SELECT FROM Stock WHERE id = :id";
        $val = ['id' => ($stock->id)];
        return $dbstock->SQuerry($sql,$val);
    }
    public function ReadALLDAL(){
        $dbstock = new Connection();
        $dbstock -> Connect();
        $sql = "SELECT * FROM Stock";
        return $dbstock->SQuerry($sql,null);
    }
    public function Update(Stock $stock){
        $dbstock = new Connection();
        $dbstock -> Connect();
        $sql="UPDATE Stock set Stock=:Stock  where id=:id ";
        $arrayStock = (array) $stock;
        return $dbstock->SQuerry($sql,$arrayStock);
    }
    public function Delete(Stock $stock){
        $dbstock = new Connection();
        $dbstock -> Connect();
        $sql="DELETE FROM Stock WHERE id = :id";
        $val = ['id' => ($stock->id)];
        return $dbstock->SQuerry($sql,$val);
    }
}