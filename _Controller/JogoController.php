<?php

require_once dirname(__FILE__) . '/../_BL/Venda.php';
require_once dirname(__FILE__) . '/../_BL/Encomenda.php';
require_once dirname(__FILE__) . '/../_BL/Jogo.php';
require_once dirname(__FILE__) . '/../_BL/Genero.php';
require_once dirname(__FILE__) . '/../_BL/Plataforma.php';
require_once dirname(__FILE__) . '/../_BL/Stock.php';
require_once dirname(__FILE__) . '/UserController.php';
class JogoController
{
    public static function processJogo()
    {

        if (isset($_POST["Update_Jogo"])) {
            self::Update_Jogo();
        }
        if (isset($_POST["Delete_Jogo"])) {
            self::Delete_Jogo();
        }
        if (isset($_POST["Create_Jogo"])) {
            self::Create_Jogo();
        }
    }


    public static function GetJogoByID($bb){
        $JogoPDO = new Jogo();
        $JogoPDO->idJogo= $bb['id_jogo'];
        return $jogo = $JogoPDO->Read();
    }
    public static function GetJogoByIDNonObj($bb){
        $JogoPDO = new Jogo();
        $JogoPDO->idJogo= $bb;
        return $jogo = $JogoPDO->Read();
    }
    public static function ReadJogo($param){
        $POD = new Jogo();
        $POD->idJogo=$param;
        return ($POD->Read());
    }
    public static function ReadJogoALL(){
        $POD = new Jogo();
        return ($POD->ReadALL());
    }
    public static function ReadJogobyGen($idGen){
        $POD = new Jogo();
        if($idGen==0){return ($POD->ReadALL());}
        else{
            $POD->idGenero=$idGen;
            return ($POD->ReadGen());}
    }
    public static function ReadJogobyPlat($idPlat){
        $POD = new Jogo();
            $POD->idPlataforma=$idPlat;
            return ($POD->ReadPlat());
    }

    //Admin_Jogos
    public static function Create_Jogo(){
        $PDO =new Jogo('','','','','','','');
        $PDO->nome=$_POST['Nome'];
        $PDO->preco=$_POST['preco'];
        $PDO->descricao=$_POST['descricao'];
        $PDO->Imagem=file_get_contents($_FILES['Imagem']['tmp_name']);
        $PDO->idGenero=$_POST['idGenero'];
        $PDO->idPlataforma=$_POST['idPlataforma'];
        $PDO->Create();
    }
    public static function Update_Jogo(){
        $PDO =new Jogo('','','','','','','');
        $PDO->idJogo=$_POST['idJogo'];
        $PDO->nome=$_POST['Nome'];
        $PDO->preco=$_POST['preco'];
        $PDO->descricao=$_POST['descricao'];
        $PDO->Imagem=file_get_contents($_FILES['Imagem']['tmp_name']);
        $PDO->idGenero=$_POST['idGenero'];
        $PDO->idPlataforma=$_POST['idPlataforma'];
        $PDO->Update();
    }
    public static function Delete_Jogo(){
        $PDO =new Jogo('','','','','','','');
        $PDO->idJogo=$_POST['idJogo'];
        $PDO->Delete();
    }


}