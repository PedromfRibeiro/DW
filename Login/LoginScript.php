<?php
include_once "_BL/Utilizador.php";
    $log = new Utilizador('','','','','','','');

    $log = isset($_POST['log']) ? $_POST['log'] : '';
    $pass = isset($_POST['pass']) ? $_POST['pass'] : '';

    if (empty($email) || empty($password)) {
        echo "Informe email e senha";
        exit;  }

    $user = $log[0];
    session_start();
    $_SESSION['logged_in'] = true;
    $_SESSION['user_id'] = $user['id'];
    $_SESSION['user_email'] = $user['email'];

    $log->Nome = $log;

    $log -> Nome = $log;
    $con= $log->Read();

    if(count($con) > 0 )
    {
        header('location:Index.php');
    }
    if (count($con) <= 0)
    {
        echo "Email ou senha incorretos";
        exit;
    }
?>