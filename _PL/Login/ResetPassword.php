<?php

session_start();
require_once '../_BL/Utilizador.php';

function checkPassword($pwd) {

    if (empty($pwd)) {
        $_SESSION['message'] = "Password is empty!";
        return true;
    }
    if (strlen($pwd) < 8 || strlen($pwd) > 24) {
        $_SESSION['message'] = "Password too short!";
        return true;
    }

    if (!preg_match("#[0-9]+#", $pwd)) {
        $_SESSION['message'] = "Password must include at least one number!";
        return true;
    }

    if (!preg_match("#[a-zA-Z]+#", $pwd)) {
        $_SESSION['message']  = "Password must include at least one letter!";
        return true;
    }
    else return false;
}
if ($_SERVER['REQUEST_METHOD']=='POST') {

    if($_POST['newpassword']== $_POST['confirmpassword']){

        $email = $_POST['email'];
        $code_hash= $_POST['code_hash'];
        $rss = new Utilizador('', '', '', '', '', '', '', '', '');

        $rss->email=$email;
        $rss->code_hash =$code_hash;
        $check =$rss->Reademail();

        if (empty($check)) {
            $_SESSION['message'] = "User with that email dosen't exist!";
            header("Location: error.php");


        }
        if(checkPassword($_POST['newpassword'])){header("Location: error.php");}

        else {
            $rss ->Nome=$check['Nome'];
            $rss->pass=sha1($_POST['newpassword']);
            $rss ->Data_Registo=$check['Data_Registo'];
            $rss ->Autorizacao=$check['Autorizacao'];
            $rss ->Data_Nascimento=$check['Data_Nascimento'];
            $rss ->email=$check['email'];
            $rss->Verify='1';

            $rss->code_hash = md5(rand(0, 1000));
            $rss->Update();
            $_SESSION['message'] = "<p>Your Password has been updated!</p>";

        }}
    else{
            $_SESSION['message'] = "The two password you entered don't match, try again!";
            header("Location: error.php");

        }

}
