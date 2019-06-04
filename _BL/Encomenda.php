<?php
require_once dirname(__FILE__) . '/../_DAL/EncomendaDAL.php';

class Encomenda
{
    public $idEncomenda;
    public $data_enc;
    public $Valor;
    public $Finalizada;
    public $id_utilizador;

    public function __construct($idEncomenda = null, $data_enc = null, $Valor = null, $Finalizada = null, $id_utilizador = null)
    {
        $this->idEncomenda = $idEncomenda;
        $this->data_enc = $data_enc;
        $this->Valor = $Valor;
        $this->Finalizada = $Finalizada;
        $this->id_utilizador = $id_utilizador;
    }

    public function Create()
    {
        return EncomendaDAL::CreateDAL($this);
    }

    public function Read()
    {
        return EncomendaDAL::ReadDAL($this);
    }

    public function ReadALL()
    {
        return EncomendaDAL::ReadALLDAL();
    }

    public function Update()
    {
        return EncomendaDAL::Update($this);
    }
    public function UpdateCarrinho()
    {
        return EncomendaDAL::UpdateCarrinhoDAL($this);
    }


    public function Delete()
    {
        return EncomendaDAL::Delete($this);
    }

    public function CreateTable()
    {
        return EncomendaDAL::CreateDB();
    }

    public function CheckCarrinho()
    {
        return EncomendaDAL::CheckCarrinhoDAL($this);
    }

    public function UpdateValor()
    {
        return EncomendaDAL::UpdateValorDAL($this);
    }

    public function ReadUtil()
    {
        return EncomendaDAL::ReadUtilizadorDAL($this);
    }


}