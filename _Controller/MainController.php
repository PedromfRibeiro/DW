<?php
require_once dirname(__FILE__)."/UserController.php";


class MainController
{
    public static function process(){
        session_start();
        UserController::process1();
        self::Href();
    }
    public static function Href()
    {
        $option = $_GET["page"];
        $dir = dirname(__FILE__, 2);
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
        }
    }
}

