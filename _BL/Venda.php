<?php


class Venda
{
public $idVenda;
public $Data;
public $Valor;
public $quantidade;
public $id_Jogo;
public $id_Encomenda;

    public function __construct($idVenda, $Data, $Valor, $quantidade, $id_Jogo, $id_Encomenda)
    {
        $this->idVenda = $idVenda;
        $this->Data = $Data;
        $this->Valor = $Valor;
        $this->quantidade = $quantidade;
        $this->id_Jogo = $id_Jogo;
        $this->id_Encomenda = $id_Encomenda;
    }


}