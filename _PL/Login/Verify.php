<?php
session_start();
require_once '../_BL/Utilizador.php';

if(isset($_GET['email']) && !empty($_GET['email']) AND isset($_GET['code_hash']) && !empty($_GET['code_hash'])){

    $verify = new Utilizador('','','','','','','','','');
    $verify->email=$_GET['email'];
    $verify->code_hash=$_GET['code_hash'];

    $result_of_Verify=$verify->ReadVerify();
    if(empty($result_of_Verify)){
        $_SESSION['message'] = "Account has already been activated or the URL is invalid!";
        header("Location: error.php");
    }
    else {
        $_SESSION['message'] = "Your Account has been activated!";
        $verify->code_hash = md5(rand(0, 1000));
        $verify->Verify='1';
        $verify->UpdateVerify();
        $_SESSION['message'] = "Account has been activated !";
        header("Location: Sucess.php");
    }
}
else{
    $_SESSION['Message']="Invalid parameters provided for account verification!";
    header("Location: error.php");

}