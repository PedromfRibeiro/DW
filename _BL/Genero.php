<?php
require_once dirname(__FILE__) . '/../_DAL/GeneroDAL.php';

class Genero
{
    public $idGenero;
    public $genero;
    public $ImagemGen;

    public function __construct($idGenero, $genero, $ImagemGen)
    {
        $this->idGenero = $idGenero;
        $this->genero = $genero;
        $this->ImagemGen = $ImagemGen;
    }


    public function Create()
    {
        return GeneroDAL::CreateDAL($this);
    }

    public function Read()
    {
        return GeneroDAL::ReadDAL($this);


    }

    public function ReadALL()
    {
        return GeneroDAL::ReadALLDAL();


    }

    public function Update()
    {
        return GeneroDAL::Update($this);

    }

    public function Delete()
    {
        return GeneroDAL::Delete($this);
    }

    public function CreateDB()
    {
        return GeneroDAL::CreateTable();
    }

}