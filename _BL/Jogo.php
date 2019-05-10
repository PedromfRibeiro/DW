<?php
require_once ('_DAL/JogoDAL.php');


class Jogo
{
    public $idJogo;
    public $nome;
    public $preco;
    public $descricao;
    public $idGenero;
    public $idPlataforma;


    public function __construct($idJogo, $nome, $preco, $descricao, $idGenero, $idPlataforma)
    {
        $this->idJogo = $idJogo;
        $this->nome = $nome;
        $this->preco = $preco;
        $this->descricao = $descricao;
        $this->idGenero = $idGenero;
        $this->idPlataforma = $idPlataforma;
    }


    public function Create()
    {
        $val = new JogoDAL();
        $val->CreateDAL($this);
    }
    public function ReadALL()    {
        $val = new JogoDAL();
        return $val -> ReadALLDAL();

    }

    public function Update()     {
        $val = new JogoDAL();
        $val -> Update($this);

    }
    public function Delete()     {
        $val = new JogoDAL();
        $val -> Delete($this);
    }

    public function CreateTable(){
        $val = new JogoDAL();
        $val -> CreateDB();
    }

}

?>