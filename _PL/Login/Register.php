<?php


if(isset($_POST["Register"])) {

    UserController::Register();
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
<form  method="post">
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