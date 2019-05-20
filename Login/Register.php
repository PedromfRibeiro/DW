<?php
session_start();
include('../_includes/Header.php');
require_once '../_BL/Utilizador.php';

function checkPassword($pwd,&$msg) {

    if (empty($pwd)) {
        $msg= "Password is empty!";
        return true;
    }
    if (strlen($pwd) < 8 || strlen($pwd) > 24) {
        $msg= "Password too short!";
        return true;
    }

    if (!preg_match("#[0-9]+#", $pwd)) {
        $msg= "Password must include at least one number!";
        return true;
    }

    if (!preg_match("#[a-zA-Z]+#", $pwd)) {
        $msg = "Password must include at least one letter!";
        return true;
    }
else return false;
}

function checkEmail($email,&$msg){
    $chk = new Utilizador('', '', '', '', '', '', '', '', '');
    $chk->email =$email;
    $check=$chk->ReadEmail();

    if (empty($email)) {
        $msg= "Email is empty!";
        return true;
    }

    if($check>0){
        $msg = '<label>The email is already in use!</label>';
        return true;
    }
    if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        $msg = '<label>Please make sure your email adress is valid</label>';
        return true;}
    if ($email == trim($email) && strpos($email, ' ') !== false) {
        $msg = '<label>Please make sure your email adress is valid</label>';
        return true;
    }

    else return false;
}

function CheckBirth($birth,&$msg){
    $d1 = new DateTime("$birth");
    $d2 = new DateTime("now");
    $diff = $d1->diff($d2);
    $uu=$diff->y;

    if($uu<16){
        $_SESSION['message']  = "You Need to be above 16 to register in our Website!";
        return true;
    }
    if(empty($_POST["data_Nascimento"])){$msg = '<label>Birth date is required</label>'; return true; }


    else return false;
}

try {
    if (isset($_POST['register'])) {

        $date = date("D M d, Y G:i");

        $email = !empty($_POST['email']) ? trim($_POST['email']) : null;
        $pass = !empty($_POST['password']) ? trim($_POST['password']) : null;

       if (empty($_POST["Nome"])) {$message = '<label>All fields are required</label>';}
       if (   checkEmail   ($_POST['email']   ,$message)
           || checkPassword($_POST["password"],$message)
           || CheckBirth   ($_POST['data_Nascimento']   ,$message) ){}

        else {
            $uu = new Utilizador('', '', '', '', '', '', '', '', '');
            $uu->Nome = $_POST["Nome"];
            $uu->email = $_POST["email"];
            $uu->pass =  sha1($_POST['password']);
            $uu->Data_Registo = $date;
            $uu->Data_Nascimento = $_POST["data_Nascimento"];
            $uu->code_hash = md5(rand(0, 1000));
            $uu->Verify = '0';


            $statement = $uu->Read();

            if ($statement > 0) {
                $message = '<label>Data already exist!</label>';

            } else {
                $message = '<label>Thank you for registering with our website.</label>';
                $uu->Create();


                $to = $_POST["email"];
                $subject = 'Acount Verification(The Classic Gamer)';
                $headers = 'From:TheClassicGamerComp@gmail.com';
                $msg = '
                Hello ' . $_POST["Nome"] . ',
Thank you for Signing up!
Please Click This link to activate your account:
http://localhost/DWphp/Login/Verify.php?email=' . $uu->email . '&code_hash=' . $uu->code_hash;

                mail($to, $subject, $msg, $headers);


            }
        }
    }
}
catch(PDOException $error)
{
    $message = $error->getMessage();
}




?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Register</title>
</head>
<body>
<?php
if(isset($message))
{
    echo '<label class="text-danger">'.$message.'</label>';
}
?>
<h1>Register</h1>
<form action="Register.php" method="post">
    <label for="Nome">Nome</label>
    <input type="text" id="Nome" name="Nome"><br>
    <label for="email">email</label>
    <input type="text" id="email" name="email"><br>
    <label for="password">Password</label>
    <input type="text" id="password" name="password"><br>
    <input type="date" id="data_Nascimento" name="data_Nascimento"><br>
    <input type="submit" name="register" value="Register"></button>
    <form method="get"  action="Register.php" >
        <a href="../Index.php" class="btn btn-info">Home</a>
    </form>

</form>
</body>
</html>