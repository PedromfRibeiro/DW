<?php

require_once dirname(__FILE__) . '/../_DAL/StockDAL.php';

class Stock
{
    public $idStock;
    public $quantidade;
    public $idJogo;


    public function __construct($idStock, $quantidade, $idJogo)
    {
        $this->idStock = $idStock;
        $this->quantidade = $quantidade;
        $this->idJogo = $idJogo;
    }


    public function Create()
    {
        return StockDAL::Create($this);
    }

    public function Read()
    {
        return StockDAL::ReadDAL($this);
    }

    public function ReadALL()
    {
        return StockDAL::ReadALLDAL();
    }

    public function Update()
    {
        return StockDAL::Update($this);

    }

    public function Delete()
    {
        return StockDAL::Delete($this);
    }

    public function CreateDB()
    {
        return StockDAL:: CreateTable();
    }

    public function ReadIdJogo()
    {
        return StockDAL::ReadIdJogoDAL($this);
    }


}