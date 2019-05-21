<?php

include '_BL/Utilizador.php';
class UserController
{
public static function process()
{
if (isset($_POST{'user-register'})) {
//($_POST);mostra variavel simples. para debug
$Utilizador = new Utilizador();
$Utilizador->login = $_POST('login');
$Utilizador->password = $_POST('password');
$Utilizador->create();
} else if (isset($_POST['user-login'])){

self::processLogin();
}
}

private static function processLogin(){
$Utilizador = new Utilizador();
$Utilizador-> login = $_POST('login');
$Utilizador-> password = $_POST('password');
if($Utilizador-> readByLoginandPassword()){
$_SESSION['userid'] = $Utilizador->id;
}
}

public static function isUserLoggedIn(){
return(isset($_SESSION['userid']));
}

public static function getLoggedUser(){

}

public static function IsUserLoggedAdmin(){

}

}