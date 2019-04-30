<?php
include ('DAL/JogoDAL.php');

class Jogo
{
    public $id;
    public $nome;
    public $preco;
    public $descricao;
    //Chaves estrangeiras
    public $idGenero;
    public $idPlataforma;

    public function __construct($id,$nome,$preco,$descricao,$idGenero,$idPlataforma)
    {
        $this->id = $id;
        $this->nome = $nome;
        $this->preco = $preco;
        $this->descricao = $descricao;
        $this->idGenero = $idGenero;
        $this->idPlataforma = $idPlataforma;

    }

    public  function Create()     {

        $val = new JogoDAL();
        $val -> Create($this);
    }

    public function ReadALL()       {
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

    public function CreateTable(){}



}
?>