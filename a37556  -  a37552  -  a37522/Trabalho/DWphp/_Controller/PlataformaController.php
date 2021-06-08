<?php


class PlataformaController
{
    public static function processPlat()
    {

        if (isset($_POST["Update_Plat"])) {
            self::Update_Plat();
        }
        if (isset($_POST["Delete_Plat"])) {
            self::Delete_Plat();
        }
        if (isset($_POST["Create_Plat"])) {
            self::Create_Plat();
        }
    }
    public static function GetPlataforma($id){
        $Gen = new Plataforma('','','');
        $Gen->id=$id;
        return $Gen->Read();
    }
    public static function GetPlataformaALL(){
        $Gen = new Plataforma('','','');
        return $Gen->ReadALL();
    }
    public static function Create_Plat(){
        $PDO =new Plataforma('','','');
        $PDO->Plataforma=$_POST['Nome'];
        $PDO->ImagemPlat=file_get_contents($_FILES['Imagem']['tmp_name']);
        $PDO->Create();
    }
    public static function Update_Plat(){
        $PDO =new Plataforma('','','');
        $PDO->id=$_POST['idPlat'];
        $PDO->Plataforma=$_POST['Nome'];
        if(file_get_contents($_FILES['Imagem']['tmp_name'])!=null){
            $PDO->ImagemPlat=file_get_contents($_FILES['Imagem']['tmp_name']);
        }
        $PDO->Update();
    }
    public static function Delete_Plat(){
        $PDO =new Plataforma('','','');
        $PDO->id=$_POST['idPlat'];
        $PDO->Delete();
    }

}