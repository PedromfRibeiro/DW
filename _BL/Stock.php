<?php

include ('_DAL/StockDAL.php');

class Stock
{
public $idStock;
public $quantidade;
public $idJogo;


    public function __construct($idStock, $quantidade, $idJogo)
    {
        $this->$idStock = $idStock;
        $this->quantidade = $quantidade;
        $this->idJogo = $idJogo;
    }


    public function Create()
    {
        $val = new StockDAL();
        $val -> Create($this);
    }
    public function Read()     {
        $val = new StockDAL();
        $result = $val -> ReadDAL($this);
        return $result;

    }
    public function ReadALL()    {
        $val = new StockDAL();
        $rr =$val -> ReadALLDAL();
        return $rr;

    }

    public function Update()     {
        $val = new StockDAL();
        $val -> Update($this);

    }
    public function Delete()     {
        $val = new StockDAL();
        $val -> Delete($this);
    }

}