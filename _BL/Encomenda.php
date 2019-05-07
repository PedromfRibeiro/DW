<?php


class Encomenda
{
    public $idEncomenda;
    public $Date;
    public $Finalizada;
    public $id_Utilizador;

    public function __construct($idEncomenda, $Date, $Finalizada, $id_Utilizador)
    {
        $this->idEncomenda = $idEncomenda;
        $this->Date = $Date;
        $this->Finalizada = $Finalizada;
        $this->id_Utilizador = $id_Utilizador;
    }


}