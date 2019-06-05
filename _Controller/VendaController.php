<?php
require_once dirname(__FILE__) . '/../_BL/Venda.php';
require_once dirname(__FILE__) . '/../_BL/Encomenda.php';
require_once dirname(__FILE__) . '/../_BL/Jogo.php';
require_once dirname(__FILE__) . '/../_BL/Genero.php';
require_once dirname(__FILE__) . '/../_BL/Plataforma.php';
require_once dirname(__FILE__) . '/../_BL/Stock.php';
require_once dirname(__FILE__) . '/UserController.php';

class VendaController
{
    public static function processVenda()
    {
        if (isset($_POST["Compra"])) {
            self::Compra();
        }

    }

    public static function Compra()
    {
        $VendaJogo = new Venda('', '', '', '', '', '');
        $VendaJogo->Data = date("Y/m/d");
        $VendaJogo->id_jogo = $_GET['jogo'];
        $VendaJogo->quantidade = 1;
        $VendaJogo->Valor = $_POST['preco'];
        $VendaJogo->id_Encomenda = EncomendaController::CheckCarrinho();
        self::ValorFinal($VendaJogo);
        $VendaJogo->Create();
        $_SESSION["Controll"]["Type"]="success";
        $_SESSION["Controll"]["Mensage"]="Your Game was added to the Shopping Cart";
    }



    public static function ValorFinal(Venda $VendaJogo)
    {
        $EncomendaCliente = new Encomenda('', '', '', '', '');
        $EncomendaCliente->idEncomenda=EncomendaController::CheckCarrinho();
        $EncomendaCliente->id_utilizador = $_SESSION["id"];
        $Valor=0;
        $ReadValor = $VendaJogo->ReadValor();
        while($rowPlat = $ReadValor->fetch()){
            $Valor += ($_POST['preco']*1);
        }
        $EncomendaCliente->Valor=$Valor;
        $EncomendaCliente->UpdateValor();
    }



    public static function GetVenda($idEnc){
        $VendaPDO = new Venda('', '', '', '', '', '');
        $VendaPDO->id_Encomenda = $idEnc['idEncomenda'];
        return $VendaPDO->ReadEnc();
    }

}