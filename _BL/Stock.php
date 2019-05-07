<?php


class Stock
{
public $id;
public $quantidade;
public $idJogo;


    public function __construct($id, $quantidade, $idJogo)
    {
        $this->id = $id;
        $this->quantidade = $quantidade;
        $this->idJogo = $idJogo;
    }


}