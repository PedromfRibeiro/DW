<?php

require_once dirname(__FILE__) . '/../_DAL/JogoDAL.php';


class Jogo
{
    public $idJogo;
    public $nome;
    public $preco;
    public $descricao;
    public $Imagem;
    public $idGenero;
    public $idPlataforma;


    public function __construct($idJogo=null, $nome=null, $preco=null, $descricao=null,$Imagem=null, $idGenero=null, $idPlataforma=null)
    {
        $this->idJogo = $idJogo;
        $this->nome = $nome;
        $this->preco = $preco;
        $this->Imagem = $Imagem;
        $this->descricao = $descricao;
        $this->idGenero = $idGenero;
        $this->idPlataforma = $idPlataforma;
    }


    public function Create()
    {
        return JogoDAL::CreateDAL($this);
    }
    public function Read()    {
        return JogoDAL::ReadDAL($this);

    }
    public function ReadALL()    {
        return JogoDAL::ReadALLDAL();
    }
    public function ReadPlat()    {
        return JogoDAL::ReadPlatDAL($this);

    }

    public function Update()     {
        return JogoDAL::Update($this);
    }
    public function Delete()     {
        return JogoDAL::Delete($this);
    }

    public function CreateTable(){
        return JogoDAL::CreateDB();
    }
    public function ReadGen()    {
        return JogoDAL::ReadGenDAL($this);
    }
}