<?php

require'C:/xampp/htdocs/DWphp/_DAL/UtilizadorDAL.php';


class Utilizador
{
public $idUtilizador;
public $Nome;
public $pass;
public $Data_Registo;
public $Autorizacao;
public $Data_Nascimento;
public $email;
public $code_hash;
public $Verify;

    public function __construct($idUtilizador, $Nome, $pass, $Data_Registo, $Autorizacao, $Data_Nascimento, $email, $code_hash, $Verify)
    {
        $this->idUtilizador = $idUtilizador;
        $this->Nome = $Nome;
        $this->pass = $pass;
        $this->Data_Registo = $Data_Registo;
        $this->Autorizacao = $Autorizacao;
        $this->Data_Nascimento = $Data_Nascimento;
        $this->email = $email;
        $this->code_hash = $code_hash;
        $this->Verify = $Verify;
    }


    public function Create()
    {
        $val = new UtilizadorDAL();
        $val->CreateDAL($this);
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
        $val -> UpdateDAL($this);

    }
    public function Delete()     {
        $val = new UtilizadorDAL();
        $val -> DeleteDAL($this);
    }

    public function CreateTable(){
        $val = new UtilizadorDAL();
        $val -> CreateTable();


    }

    public function ReadVerify()     {
        $val = new UtilizadorDAL();
        $result = $val -> ReadVerifyDAL($this);
        return $result;
    }
    public function ReadEmail()     {
        $val = new UtilizadorDAL();
        $result = $val -> ReadEmailDAL($this);
        return $result;

    }
    public function ReadEmailHash()     {
        $val = new UtilizadorDAL();
        $result = $val -> ReadEmailHashDAL($this);
        return $result;

    }


    public function UpdateVerify()     {
        $val = new UtilizadorDAL();
        $val -> UpdateVerifyDAL($this);
    }
}