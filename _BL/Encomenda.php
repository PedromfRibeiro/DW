<?php
require_once ('_DAL/EncomendaDAL.php');

class Encomenda
{
    public $idEncomenda;
    public $data_enc;
    public $Finalizada;
    public $id_utilizador;

    public function __construct($idEncomenda, $data_enc, $Finalizada, $id_utilizador)
    {
        $this->idEncomenda = $idEncomenda;
        $this->data_enc = $data_enc;
        $this->Finalizada = $Finalizada;
        $this->id_utilizador = $id_utilizador;
    }
public function Create(){
    $val = new EncomendaDAl();
    $val -> CreateDAL($this);
}
public function Read()     {
    $val = new EncomendaDAl();
    $result = $val -> ReadDAL($this);
    return $result;

}
public function ReadALL()    {
    $val = new EncomendaDAl();
    $rr =$val -> ReadALLDAL();
    return $rr;

}

public function Update()     {
    $val = new EncomendaDAl();
    $val -> Update($this);

}
public function Delete()     {
    $val = new EncomendaDAl();
    $val -> Delete($this);
}


}