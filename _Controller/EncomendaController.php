<?php

require_once dirname(__FILE__) . '/../_BL/Venda.php';
require_once dirname(__FILE__) . '/../_BL/Encomenda.php';
require_once dirname(__FILE__) . '/../_BL/Jogo.php';
require_once dirname(__FILE__) . '/../_BL/Genero.php';
require_once dirname(__FILE__) . '/../_BL/Plataforma.php';
require_once dirname(__FILE__) . '/../_BL/Stock.php';
require_once dirname(__FILE__) . '/UserController.php';

class EncomendaController
{
    public static function processEncomenda()
    {
        if (isset($_POST["ComprarCheckOut"])) {
            if(UserController::IsUserLoggedAdmin()) self::ComprarCheckOut();
        }
    }

    public static function ComprarCheckOut(){
        $EncomendaCliente = new Encomenda('', '', '', '', '');
        $EncomendaCliente->idEncomenda=self::CheckCarrinho();
        $EncomendaCliente->Finalizada=1;
        $EncomendaCliente->Valor=$_POST['Valor'];
        $EncomendaCliente->UpdateCarrinho();
        $_SESSION["Controll"]["Type"]="success";
        $_SESSION["Controll"]["Mensage"]="Order Successful!";

    }
    public static function GetIdEnc(){
        $EncPDO = new Encomenda('', '', '', '', '');
        $EncPDO->id_utilizador=$_SESSION['id'];
        return $EncPDO->ReadUtil();
    }
    public static function CheckCarrinho()
    {
        $EncomendaCliente = new Encomenda('', '', '', '', '');
        $EncomendaCliente->id_utilizador = $_SESSION["id"];
        $AfterFetch = $EncomendaCliente->CheckCarrinho();
        if ($AfterFetch != false) {
            return $AfterFetch['idEncomenda'];
        } else {
            $EncomendaCliente->data_enc = date('Y/m/d');
            $EncomendaCliente->Valor = $_POST['preco'];
            $EncomendaCliente->Finalizada = 0;
            $EncomendaCliente->id_utilizador = $_SESSION['id'];
            $EncomendaCliente->Create();
            $AfterFetch = $EncomendaCliente->CheckCarrinho();
            return $AfterFetch['idEncomenda'];
        }
    }
    public static function ReadEncomenda($param){
        $POD = new Encomenda();
        $POD->idEncomenda=$param;
        return ($POD->ReadALL());
    }

}