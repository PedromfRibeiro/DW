<?php

session_start();
require_once '../_BL/Utilizador.php';

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    if (isset($_GET['email']) && !empty($_GET['email']) AND isset($_GET['code_hash']) && !empty($_GET['code_hash'])) {
        $rss = new Utilizador('', '', '', '', '', '', '', '', '');

        $rss->email = $_GET['email'];
        $rss->code_hash = $_GET['code_hash'];
        $check = $rss->Reademail();

        if (empty($check)) {
            $_SESSION['message'] = "User with that email dosen't exist!";
            header("Location: error.php");
        } else {
            $rss = $check;
            $rss->pass = $_POST['password'];
            $rss->Update();
            $_SESSION['message'] = "<p>Your Password has been updated!</p>";
        }
    }
}
