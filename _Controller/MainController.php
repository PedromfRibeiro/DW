<?php
require_once dirname(__FILE__) . "/UserController.php";
require_once dirname(__FILE__) . "/JogoController.php";
require_once dirname(__FILE__) . "/EncomendaController.php";
require_once dirname(__FILE__) . "/VendaController.php";
require_once dirname(__FILE__) . "/StockController.php";
require_once dirname(__FILE__) . "/GenerosController.php";
require_once dirname(__FILE__) . "/PlataformaController.php";

class MainController
{
    public static function process()
    {
        session_start();
        UserController::processUser();
        JogoController::processJogo();
        GenerosController::processGen();
        VendaController::processVenda();
        PlataformaController::processPlat();
        EncomendaController::processEncomenda();



        self::Href();


        $array = array("Genero","searchEngine", "MainPage", "phpTeste", "Plataforma", "Produto", "Produtos", "Profile", "Shopping_cart", "Login/Forgot", "Login/login", "Login/Register", "Login/Reset"
        , "Admin/AdminJogos", "Admin/adminclientess", "Admin/adminencomendas", "Admin/admingeneros", "Admin/AdminJogos", "Admin/AdminMenu", "Admin/adminVenda");
        $arrayAdmin=array("Admin/AdminJogos", "Admin/adminclientess", "Admin/adminencomendas", "Admin/admingeneros", "Admin/AdminJogos", "Admin/AdminMenu", "Admin/adminVenda");



            if(in_array ($_GET['page'],$array)){}
            else{UserController::ErrorPage();}
        if(in_array ($_GET['page'],$arrayAdmin)){
            if (!UserController::IsUserLoggedAdmin()) {
                UserController::ErrorPage();
            }

        }



        if ($_GET['page'] == "Shopping_cart") {
            self::Logged();
        }
    }

    public static function Href()
    {
        $option = $_GET["page"];
        switch ($option) {

            case 'MainPage':
                {
                    $_SESSION['Hrefs'] = '_css/MainPage.css'; //css
                    break;
                }
            case 'Genero':
                {
                    $_SESSION['Hrefs'] = '_css/genero.css';
                    break;
                }
            case 'Plataforma':
                {
                    $_SESSION['Hrefs'] = '_css/Plataforma.css';
                    break;
                }
            case 'Produto':
                {
                    $_SESSION['Hrefs'] = '_css/Produto.css';
                    break;
                }
            case 'Produtos':
                {
                    $_SESSION['Hrefs'] = '_css/Produtos.css';
                    break;
                }
            case 'Profile':
                {
                    $_SESSION['Hrefs'] = '_css/Profile.css'; //css
                    break;
                }
            case 'Register':
                {
                    $_SESSION['Hrefs'] = '_css/Register.css';
                    break;
                }
            case 'Shopping_cart':
                {
                    $_SESSION['Hrefs'] = '_css/Shopping_cart.css';
                    break;
                }

            case 'Admin/adminencomendas':
                {
                    $_SESSION['Hrefs'] = '_css/Admin/adminencomendas.css'; //css
                    break;
                }
            case 'Admin/AdminJogos':
                {
                    $_SESSION['Hrefs'] = '_css/Admin/AdminJogos.css';
                    break;
                }
            case 'Admin/adminclientess':
                {
                    $_SESSION['Hrefs'] = '_css/Admin/adminclientes.css';
                    break;
                }
            case 'Admin/AdminMenu':
                {
                    $_SESSION['Hrefs'] = '_css/Admin/AdminMenu.css';
                    break;
                }
            case 'Admin/admingeneros':
                {
                    $_SESSION['Hrefs'] = '_css/Admin/admingeneros.css';
                    break;
                }
            case 'Admin/adminplataforma':
                {
                    $_SESSION['Hrefs'] = '_css/Admin/adminplataforma.css';
                    break;
                }

            case 'Login/Register':
                {
                    $_SESSION['Hrefs'] = '_css/Register.css'; //css
                    break;
                }
            case 'adminVenda.php':
                {
                    $_SESSION['Hrefs'] = '_css/Admin/adminplataforma.css'; //css
                    break;
                }
        }
    }

    public static function Admin()
    {
        if ($_GET['page'] == 'Admin/AdminMenu') {
            if (!UserController::IsUserLoggedAdmin()) {
                UserController::ErrorPage();
            }
        }
    }

    public static function Logged()
    {
        if ($_GET['page'] == 'Shopping_cart') {
            if (!UserController::isUserLoggedIn()) UserController::ErrorPage();
        }
        if ($_GET['page'] == 'Profile') {
            if (!UserController::isUserLoggedIn()) UserController::ErrorPage();
        }

    }

}
