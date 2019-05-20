<?php
session_start();
require_once '../_BL/Utilizador.php';


if(isset($_GET['email']) && !empty($_GET['email']) AND isset($_GET['code_hash']) && !empty($_GET['code_hash'])){

    $rss = new Utilizador('', '', '', '', '', '', '', '', '');

    $rss->email=$_GET['email'];
    $rss->code_hash=$_GET['code_hash'];
    $check=$rss->Reademail();

    if(empty($check)){
        $_SESSION['message'] ="Invalid URL for password reset!";
        header("Location: error.php");
    }
    else{
        $_SESSION['message'] ="Sorry, Verification failed,try again!";
        header("Location: error.php");

    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Reset</title>
</head>
<body>
<?php
if(isset($message))
{
    echo '<label class="text-danger">'.$message.'</label>';
}
?>
<h1>Reset</h1>
<form action="ResetPassWord.php" method="POST">
    <label for="password">password</label>
    <input type="text" id="password" name="password"><br>
    <input type="submit" name="Reset" value="Reset"></button>


</form>
</body>
</html>