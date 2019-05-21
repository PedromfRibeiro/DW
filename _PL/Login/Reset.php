<?php
session_start();
require_once '../_BL/Utilizador.php';


if(isset($_GET['email']) && !empty($_GET['email']) AND isset($_GET['code_hash']) && !empty($_GET['code_hash'])){

    $email=$_GET['email'];
    $code_hash=$_GET['code_hash'];

    $rss = new Utilizador('', '', '', '', '', '', '', '', '');

    $rss->email=$email;
    $rss->code_hash=$code_hash;
    $check=$rss->ReadEmailHash();

    if(empty($check)){
        $_SESSION['message'] ="Invalid URL for password reset!";
        header("Location: error.php");
    }}
    else{
        $_SESSION['message'] ="Sorry, Verification failed,try again!";
        header("Location: error.php");

    }


?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Reset</title>
</head>
<body>

<h1>Reset</h1>
<form action="ResetPassword.php" method="POST">
    <label for="newpassword">password</label>
    <input type="text" id="newpassword" name="newpassword"><br>
    <label for="confirmpassword">confirmpassword</label>
    <input type="text" id="confirmpassword" name="confirmpassword"><br>
    <input type="submit" name="Reset" value="Reset">
    <input type="hidden" id="email" name="email" value="<?php echo $_GET['email'];?>">
    <input type="hidden" id="code_hash" name="code_hash" value="<?php echo $_GET['code_hash'];?>">



</form>
</body>
</html>