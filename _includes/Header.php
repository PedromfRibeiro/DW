<?php
session_start();
include '_BL/Utilizador.php';
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
            $uu = new Utilizador('','','','','','','');
            $uu->email=$_POST["email"];
            $uu->pass=$_POST["password"];

            $statement=$uu->Read();

            if($statement > 0)
            {
                $_SESSION["email"] = $_POST["email"];
                header("location:Index.php");
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
}?>
<meta charset="utf-8" />
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="../_js/LogIn.js"></script>

    <title>The Classic Gamer</title>

    <link href="_css/Styles.css" type="text/css" rel="stylesheet"/>
    <link href="_css/ee.css" type="text/css" rel="stylesheet"/>



    <!-- Header -->
    <header>

        <nav class="navbar md navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="Index.php">
                <img src="_imagens/Logo.png" class="Menu_img" alt="Menu">
                The Classic Gamer
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse " id="navbarTogglerDemo02">
                <form class="form-inline">
                    <div class="searchbar ">
                        <input class="search_input" placeholder="Search..." type="text">
                        <a href="#" class="search_icon "><i class="fas fa-search"></i></a>
                    </div>
                </form>


                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" id="loginCSS" onclick="document.getElementById('id01').style.display='block'">Login </a></li>
                    <li class="nav-item">
                        <a class="nav-link" href="Profile.php">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="Shopping_cart.php">Shopping Cart</a>
                    </li>
                </ul>

            </div>
        </nav>
    </header>
<body>
<div id="id01" class="modal">


    <form class="modal-content animate">
    <div class="container " style="width:500px;">
        <?php
        if(isset($message))
        {
            echo '<label class="text-danger">'.$message.'</label>';
        }?>
        <h3 align="">PHP Login Script using PDO</h3><br />
        <form class="modal-content animate"  method="post">
            <label><b>email</b></label>
            <input type="text" name="email" class="form-control" id="Login_Nome" placeholder="Enter email"  required>


            <label>Password</label>
            <input type="password" name="password" class="form-control" id="Login_pass" placeholder="Enter Password"  required>

            <br />
            <input type="submit" name="login" class="btn btn-info" value="Login" />
            <div class="container" >
                <button class="cancelbtn" id="close" type="button" onclick="document.getElementById('id01').style.display='none'" >Cancel</button>
                <span class="psw">Forgot <a href="#">password?</a></span>
            </div>
        </form>
    </div>
    </form>




</div>
</body>
<!-- ./Header -->