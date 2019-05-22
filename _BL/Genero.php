<?php
require_once ('C:/xampp/htdocs/DWphp/_DAL/GeneroDAL.php');

class Genero
{
   public $id;
   public $genero;


    public function __construct($id, $genero)
    {
        $this->id = $id;
        $this->genero = $genero;
    }

    public function Create()
        {
            $val = new GeneroDAL();
            $val->CreateDAL($this);
        }
    public function Read()     {
        $val = new GeneroDAL();
        $result = $val -> ReadDAL($this);
        return $result;

    }
    public function ReadALL()    {
        $val = new GeneroDAL();
        $rr =$val -> ReadALLDAL();
        return $rr;

    }

        public function Update()     {
        $val = new GeneroDAL();
        $val -> Update($this);

        }
        public function Delete()     {
            $val = new GeneroDAL();
            $val -> Delete($this);
        }

        public function CreateDB(){
            $val = new GeneroDAL();
            $val -> CreateTable();
    }

}

?>