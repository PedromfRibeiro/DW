<?php


class Utilizador
{
public $idUtilizador;
public $Nome;
public $Data_Registo;
public $Autorizcao;
public $email;


    public function __construct($idUtilizador, $Nome, $Data_Registo, $Autorizcao, $email)
    {
        $this->idUtilizador = $idUtilizador;
        $this->Nome = $Nome;
        $this->Data_Registo = $Data_Registo;
        $this->Autorizcao = $Autorizcao;
        $this->email = $email;
    }
    public function Create()
    {
        $val = new UtilizadorDAL();
        $val->Create($this);
    }
    public function Read()     {
        $val = new UtilizadorDAL();
        $result = $val -> ReadDAL($this);
        return $result;

    }
    public function ReadALL()    {
        $val = new UtilizadorDAL();
        $rr =$val -> ReadALLDAL();
        return $rr;

    }

    public function Update()     {
        $val = new UtilizadorDAL();
        $val -> Update($this);

    }
    public function Delete()     {
        $val = new UtilizadorDAL();
        $val -> Delete($this);
    }

    public function CreateTable(){}


}