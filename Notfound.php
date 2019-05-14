<?php
include 'ErrorPage.php';
require_once 'BL/Produto.php';

//$menu = MainController::$main_menu
//Maincon

if (!CheckAccess())

{

    header('HTTP/1.0 404 Not Found');

    exit;

}

//access granted, normal flow

echo 'OK';
?>
