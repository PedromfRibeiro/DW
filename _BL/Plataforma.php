<?php
include ('_DAL/PlataformaDAL.php');
//require_once dirname( __FILE__) ."/DAL/GeneroDAL.php";

class Plataforma
{
    public $id;
    public $genero;

    public function __construct($id,$plataforma)
    {
        $this->id = $id;
        $this->plataforma = $plataforma;
    }


    public  function Create()     {

        $val = new PlataformaDAL();
        $val -> Create($this);
    }

    public function ReadALL()       {
        $val = new PlataformaDAL();
        return $val -> ReadALLDAL();

    }

    public function Update()     {
        $val = new PlataformaDAL();
        $val -> Update($this);

    }
    public function Delete()     {
        $val = new PlataformaDAL();
        $val -> Delete($this);
    }

    public function CreateTable(){}

}

?>