<?php
session_start();
require_once '../_BL/Utilizador.php';
try
{
    if(isset($_POST["login"]))
    {
        if(empty($_POST["email"]) || empty($_POST["password"]))
        {
            $message = '<label>All fields are required</label>';
        }
        else
        {
            $uu = new Utilizador('','','','','','','','','');
            $uu->email=$_POST["email"];
            $uu->pass= sha1($_POST['password']);;

            $statement=$uu->Read();

            if(!($statement['Verify']==1)){
                $_SESSION["message"]="Conta não verificada, verifique o seu email!";
                header("Location: error.php");

            }
            else if($statement > 0)
            {
                $_SESSION["email"] = $_POST["email"];
                $_SESSION["message"]="Log In com sucesso";
                header("Location: Sucess.php");
            }
            else
            {
                $message = '<label>Wrong Data</label>';
            }
        }
    }
}
catch(PDOException $error)
{
    $message = $error->getMessage();
}
?>
<meta charset="utf-8" />
<!DOCTYPE html>
<html>
<head>
    <title>Webslesson Tutorial | PHP Login Script using PDO</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>
<br />
<div class="container" style="width:500px;">
    <?php
    if(isset($message))
    {
        echo '<label class="text-danger">'.$message.'</label>';
    }
    ?>
    <h3 align="">PHP Login Script using PDO</h3><br />
    <form method="post">
        <label>email</label>
        <input type="text" name="email" class="form-control" />
        <br />
        <label>Password</label>
        <input type="password" name="password" class="form-control" />
        <br />
        <input type="submit" name="login" class="btn btn-info" value="Login" />
        <form method="get"  action="Register.php" >
            <a href="Register.php" class="btn btn-info">Registar</a>
        </form>
        <form method="get"  action="Forgot.php" >
            <a href="Forgot.php" class="btn btn-info">resetPass</a>
        </form>

    </form>
</div>
<br />
</body>
</html>