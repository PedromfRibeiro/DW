<?php
require_once dirname(__FILE__) . '/../_DAL/VendaDAL.php';

class Venda
{
    public $idVenda;
    public $Data;
    public $Valor;
    public $quantidade;
    public $id_jogo;
    public $id_Encomenda;

    public function __construct($idVenda = null, $Data = null, $Valor = null, $quantidade = null, $id_jogo = null, $id_Encomenda = null)
    {
        $this->idVenda = $idVenda;
        $this->Data = $Data;
        $this->Valor = $Valor;
        $this->quantidade = $quantidade;
        $this->id_jogo = $id_jogo;
        $this->id_Encomenda = $id_Encomenda;
    }

    public function Create()
    {
        return VendaDAL::Create($this);
    }

    public function Read()
    {
        return VendaDAL::ReadDAL($this);
    }

    public function ReadALL()
    {
        return VendaDAL::ReadALLDAL();
    }

    public function Update()
    {
        return VendaDAL::Update($this);
    }

    public function Delete()
    {
        return VendaDAL::Delete($this);
    }

    public function CreateTable()
    {
        return VendaDAL::CreateDB();
    }
    public function ReadValor()     {
        return VendaDAL::ReadValorDAL($this);
    }

    public function ReadEnc()
    {
        return VendaDAL::ReadEncDAL($this);
    }

}