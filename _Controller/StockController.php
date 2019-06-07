<?php


class StockController
{
    public static function processStock()
    {

        if (isset($_POST["Update_Stock"])) {
            self::Update_Stock();
        }
        if (isset($_POST["Delete_Stock"])) {
            self::Delete_Jogo();
        }
        if (isset($_POST["Create_Stock"])) {
            self::Create_Jogo();
        }
    }



    public static function GetStockByID($bb){
        $StockPDO = new Stock('', '', '');
        $StockPDO->idJogo= $bb['id_jogo'];
        $Stock = $StockPDO->ReadIdJogo();
        return $Stock->fetch();
    }
    public static function StockRead(){
        $StockPDO = new Stock('', '', '');
        return  $StockPDO = $StockPDO->ReadALL();
    }
public static function Update_Stock(){
        $aa=new stock();
    $aa->quantidade=$_POST['quan'];
    $aa->idStock=$_POST['idStock'];
    $aa->idStock=$_POST['idJogo'];
$aa->Update();

}
    public static function Delete_Jogo(){
        $aa=new stock();
    $aa->idStock=$_POST['idStock'];
    $aa->Delete();
    }

    public static function Create_Jogo(){
        $aa=new stock();
        $aa->quantidade=$_POST['quan'];
        $aa->idStock=0;
        $aa->idStock=$_POST['idJogo'];
        $aa->Create();

    }

}