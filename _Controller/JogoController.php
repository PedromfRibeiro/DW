<?php

require_once dirname(__FILE__) . "/../_BL/Venda.php";
require_once dirname(__FILE__) . "/../_BL/Encomenda.php";

class JogoController
{
    public static function processJogo()
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
        $VendaJogo->id_Encomenda = self::CheckCarrinho();
        self::ValorFinal($VendaJogo);
        $VendaJogo->Create();
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

    public static function ValorFinal(Venda $VendaJogo)
    {
        $EncomendaCliente = new Encomenda('', '', '', '', '');
        $EncomendaCliente->idEncomenda=self::CheckCarrinho();
        $EncomendaCliente->id_utilizador = $_SESSION["id"];
        $Valor=0;
        $ReadValor = $VendaJogo->ReadValor();
        while($rowPlat = $ReadValor->fetch()){
            $Valor += ($_POST['preco']*1);
        }
        $EncomendaCliente->Valor=$Valor;
        $EncomendaCliente->UpdateValor();
    }
}