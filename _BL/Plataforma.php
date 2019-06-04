<?php
require_once dirname(__FILE__) . '/../_DAL/PlataformaDAL.php';

class Plataforma
{
   public $id;
   public $Plataforma;

    public function __construct($id,$Plataforma){
        $this->id = $id;
        $this->Plataforma = $Plataforma;
    }

        public function Create()
        {
            $val = new PlataformaDAL();
            $val->Create($this);
        }
    public function Read()
    {
        $val = new PlataformaDAL();
        return $val -> ReadDAL($this);

    }
    public function ReadALL()
    {
        $val = new PlataformaDAL();
        return $val -> ReadALLDAL();

    }
        
        public function Update()
        {
        $val = new PlataformaDAL();
        $val -> Update($this);
        }
        public function Delete()
        {
            $val = new PlataformaDAL();
            $val -> Delete($this);
        }

        public function CreateDB(){

        $val = new PlataformaDAL();
        $val -> CreateTable();
    }
}

?>