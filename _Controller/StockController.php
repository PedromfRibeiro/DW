<?php


class StockController
{
    public static function GetStockByID($bb){
        $StockPDO = new Stock('', '', '');
        $StockPDO->idJogo= $bb['id_jogo'];
        $Stock = $StockPDO->ReadIdJogo();
        return $Stock->fetch();
    }

}