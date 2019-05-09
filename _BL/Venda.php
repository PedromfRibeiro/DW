<?php

include ('_DAL/VendaDAL.php');
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

    public function Create()
    {
        $val = new VendaDAL();
        $val->Create($this);
    }
    public function Read()     {
        $val = new VendaDAL();
        $result = $val -> ReadDAL($this);
        return $result;

    }
    public function ReadALL()    {
        $val = new VendaDAL();
        $rr =$val -> ReadALLDAL();
        return $rr;

    }

    public function Update()     {
        $val = new VendaDAL();
        $val -> Update($this);

    }
    public function Delete()     {
        $val = new VendaDAL();
        $val -> Delete($this);
    }


}