<?php
session_start();
require_once '../_BL/Utilizador.php';

if($_SERVER['REQUEST_METHOD']=='POST'){
    $chk = new Utilizador('', '', '', '', '', '', '', '', '');
    $chk->email=$_POST['email'];
    $check=$chk->ReadEmail();

    if(empty($check)){
        $_SESSION['message'] ="User with that email dosen't exist!";
        header("Location: error.php");
    }
    else{
        $chk->Verify='0';
        $chk->code_hash = md5(rand(0, 1000));
        $chk->UpdateVerify();
        $email=$_POST['email'];
        $check=$chk->ReadEmail();
        $name=$check[1];
        $hash=$check[7];

            $_SESSION['message'] ="<p>Please check your email<span>$email</span>"."for a confirmation link to complete password reset!</p>";

        $to = $_POST["email"];
        $subject = 'Acount Verification(The Classic Gamer)';
        $headers = 'From:TheClassicGamerComp@gmail.com';
        $msg = '  Hello ' . $name . ',
Please Click This link to Reset your password:
http://localhost/DWphp/Login/Reset.php?email='.$email.'&code_hash='.$hash;

        mail($to, $subject, $msg, $headers);
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
<form action="Forgot.php" method="post">
    
    <label for="email">email</label>
    <input type="text" id="email" name="email"><br>
    <input type="submit" name="Reset" value="Reset"></button>
    

</form>
</body>
</html>