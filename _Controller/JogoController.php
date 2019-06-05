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
        if (isset($_POST["Compra"])) {
            self::Compra();
        }
        if (isset($_POST["ComprarCheckOut"])) {
            if(UserController::IsUserLoggedAdmin()) self::ComprarCheckOut();
        }
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
        $_SESSION["Controll"]["Type"]="success";
        $_SESSION["Controll"]["Mensage"]="Your Game was added to the Shopping Cart";
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

    public static function GetIdEnc(){
        $EncPDO = new Encomenda('', '', '', '', '');
        $EncPDO->id_utilizador=$_SESSION['id'];
        return $EncPDO->ReadUtil();
    }

    public static function GetVenda($idEnc){
        $VendaPDO = new Venda('', '', '', '', '', '');
        $VendaPDO->id_Encomenda = $idEnc['idEncomenda'];
        return $VendaPDO->ReadEnc();
    }

    public static function GetJogoByID($bb){
        $JogoPDO = new jogo('', '', '', '', '', '','');
        $JogoPDO->idJogo= $bb['id_jogo'];
        $jogo = $JogoPDO->Read();
        return $jogo->fetch();
    }

    public static function GetStockByID($bb){
        $StockPDO = new Stock('', '', '');
        $StockPDO->idJogo= $bb['id_jogo'];
        $Stock = $StockPDO->ReadIdJogo();
        return $Stock->fetch();
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

    public static function GetGeneros($id){
        $Gen = new Genero('','','');
        $Gen->idGenero=$id;
        return $Gen->Read();
    }

    public static function GetPlataforma($id){
        $Gen = new Plataforma('','','');
        $Gen->id=$id;
        return $Gen->Read();
    }

    public static function ReadJogo($param){
        $POD = new Jogo();
        $POD->idJogo=$param;
        return ($POD->ReadALL());
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