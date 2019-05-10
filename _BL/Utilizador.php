<?php

require_once ('_DAL/UtilizadorDAL.php');


class Utilizador
{
public $idUtilizador;
public $Nome;
public $Data_Registo;
public $Autorizcao;
public $Data_Nascimento;
public $email;


    public function __construct($idUtilizador, $Nome, $Data_Registo, $Autorizcao,$Data_Nascimento, $email)
    {
        $this->idUtilizador = $idUtilizador;
        $this->Nome = $Nome;
        $this->Data_Registo = $Data_Registo;
        $this->Autorizcao = $Autorizcao;
        $this->Data_Nascimento=$Data_Nascimento;
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

    public function CreateTable(){
        $val = new UtilizadorDAL();
        $val -> CreateTable();


    }


}