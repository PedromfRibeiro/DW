<?php
include ('_DAL/GeneroDAL.php');
class Genero
{
   public $id;
   public $genero;

    public function __construct($id,$genero)
    {
        $this->id = $id;
        $this->genero = $genero;
    }


        public  function Create()     {

        $val = new GeneroDAL();
        $val -> Create($this);
    }

        public function ReadALL()       {
        $val = new GeneroDAL();
        return $val -> ReadALLDAL();

    }

        public function Update()     {
        $val = new GeneroDAL();
        $val -> Update($this);

        }
        public function Delete()     {
            $val = new GeneroDAL();
            $val -> Delete($this);
        }

        public function CreateTable(){}

}

?>