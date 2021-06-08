<?php
require_once dirname(__FILE__) . '/../_DAL/PlataformaDAL.php';

class Plataforma
{
   public $id;
   public $Plataforma;
   public $ImagemPlat;


    public function __construct($id, $Plataforma, $ImagemPlat)
    {
        $this->id = $id;
        $this->Plataforma = $Plataforma;
        $this->ImagemPlat = $ImagemPlat;
    }


    public function Create()
        {
            return PlataformaDAL::Create($this);
        }
    public function Read()
    {
        return PlataformaDAL::ReadDAL($this);

    }
    public function ReadALL()
    {
        return PlataformaDAL::ReadALLDAL();

    }
        
        public function Update()
        {
            return PlataformaDAL::Update($this);
        }
        public function Delete()
        {
            return PlataformaDAL:: Delete($this);
        }

        public function CreateDB(){

            return PlataformaDAL::CreateTable();
    }
}

?>