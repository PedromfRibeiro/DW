<?php


class GenerosController
{
    public static function processGen()
    {

        if (isset($_POST["Update_Gen"])) {
            self::Update_Gen();
        }
        if (isset($_POST["Delete_Gen"])) {
            self::Delete_Gen();
        }
        if (isset($_POST["Create_Gen"])) {
            self::Create_Gen();
        }
    }
    public static function GetGeneros($id){
        $Gen = new Genero('','','');
        $Gen->idGenero=$id;
        return $Gen->Read();
    }
    public static function GetGenerosAll(){
        $Gen = new Genero('','','');
        return $Gen->ReadALL();
    }
    public static function Create_Gen(){
        $PDO =new Genero('','','');
        $PDO->genero=$_POST['Nome'];
        $PDO->ImagemGen=file_get_contents($_FILES["ImagemGen"]["tmp_name"]);
        $PDO->Create();
    }
    public static function Update_Gen(){
        $PDO =new Genero('','','');
        $PDO->idGenero=$_POST['idGen'];
        $PDO->genero=$_POST['Nome'];
        $PDO->ImagemGen=file_get_contents($_FILES['ImagemGen']['tmp_name']);
        $PDO->Update();
    }
    public static function Delete_Gen(){
        $PDO =new Genero('','','');
        $PDO->idGenero=$_POST['idGen'];
        $PDO->Delete();
    }
}