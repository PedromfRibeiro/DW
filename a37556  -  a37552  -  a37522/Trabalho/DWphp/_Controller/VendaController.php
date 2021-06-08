<?php
require_once dirname(__FILE__) . '/../_BL/Venda.php';
require_once dirname(__FILE__) . '/../_BL/Encomenda.php';
require_once dirname(__FILE__) . '/../_BL/Jogo.php';
require_once dirname(__FILE__) . '/../_BL/Genero.php';
require_once dirname(__FILE__) . '/../_BL/Plataforma.php';
require_once dirname(__FILE__) . '/../_BL/Stock.php';

class VendaController
{
    public static function processVenda()
    {
        if (isset($_POST["Compra"])) {
            self::Compra();
        }
        if (isset($_POST["Update_Venda"])) {
            self::UpdateVenda();
        }
        if (isset($_POST["Delete_Venda"])) {
            self::DeleteVenda();
        }
        if (isset($_POST["Create_Venda"])) {
            self::CreateVenda();
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
        $EncomendaCliente = new Venda('', '', '', '', '');
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
    public static function ReadVendaALL()
    {
        $EncPDO = new Venda();
        return $EncPDO->ReadALL();
    }
    public static function UpdateVenda(){
        $PDO = new Venda();
        $PDO->idVenda = $_POST['id'];
        $PDO->Data = $_POST['data_enc'];
        $PDO->Valor = $_POST['Valor'];
        $PDO->quantidade = $_POST['Quantidade'];
        $PDO->id_jogo = $_POST["idJogo"];
        $PDO->id_Encomenda = $_POST["idEnc"];
        $PDO->Update();
    }
    public static function DeleteVenda(){
        $PDO = new Venda();
        $PDO->idVenda = $_POST['idVenda'];
        $PDO->Delete();
    }
    public static function CreateVenda(){
        $PDO = new Venda();
        $PDO->idVenda = 0;
        $PDO->Data = $_POST['data_venda'];
        $PDO->Valor = $_POST['Valor'];
        $PDO->quantidade = $_POST['Quantidade'];
        $PDO->id_jogo = $_POST["idJogo"];
        $PDO->id_Encomenda = $_POST["idEnc"];
        $PDO->Create();
}

}