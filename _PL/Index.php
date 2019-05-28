<?php
require_once  dirname(__FILE__) . "/../_Controller/MainController.php";
require_once  dirname(__FILE__) . "/../_Controller/UserController.php";
MainController::process();
?>
<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>The Classic Gamer</title>

    <!--Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--Includes-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!--JS-->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
    <script src="sweetalert2.all.min.js"></script>
    <script src="../_js/Login.js"></script>

    <script src="sweetalert2.all.min.js"></script>
    <!-- Optional: include a polyfill for ES6 Promises for IE11 and Android browser -->
    <script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
    <script src="sweetalert2.min.js"></script>
    <link rel="stylesheet" href="sweetalert2.min.css">

    <!--CSS-->
    <link rel="stylesheet" type="text/css" href="../_css/Header.css"/>
    <link rel="stylesheet" type="text/css" href="../_css/Styles.css" />
    <link type="text/css" rel="stylesheet" href="../_css/MainPage.css"/>

</head>
<body>

<!-- Header -->
<header>

    <nav class="navbar md navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="Index.php?page=MainPage">
            <img src="../_imagens/Logo.png" class="Menu_img" alt="Menu">
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

                <?php
                if(empty(UserController::isUserLoggedIn())){
                    ?>
                    <li class="nav-item">
                        <a class="nav-link" id="loginCSS" href="?page=Login/login">Login </a></li>
                    <li class="nav-item">
                        <a class="nav-link" id="loginCSS" href="?page=Login/Register">Register </a></li>
                <?php } ?>
                <?php
                if(!empty(UserController::isUserLoggedIn()) AND empty(UserController::IsUserLoggedAdmin())){
                ?>
                <li class="nav-item">
                    <a class="nav-link" id="loginCSS" href="?page=Admin/admingames">Login </a></li>
                <li class="nav-item">
                    <a class="nav-link" id="loginCSS" href="?page=Admin/admingeneros">Register </a></li>
                <?php } ?>
                <?php
                if(!empty(UserController::isUserLoggedIn())){   ?>
                    <form method="POST" >
                        <input type="submit" name="LogOut" class="btn btn-info" value="Logout" />
                    </form>
                    <li class="nav-item">
                        <a class="nav-link" href="?page=Profile">Profile</a>
                    </li>
                <?php   }   ?>

                <li class="nav-item">
                    <a class="nav-link " href="?page=Shopping_cart">Shopping Cart</a>
                </li>
            </ul>

        </div>
    </nav>
</header>
<!-- Header -->
<?php
if( isset($_SESSION["Controll"])){
UserController::AnimatedNotify($_SESSION["Controll"]["Type"],$_SESSION["Controll"]["Mensage"]);
unset($_SESSION["Controll"]);}
$option=$_GET["page"];
$page="$option.php";
require_once $page;
?>

<!-- Footer -->
<section id="footer">
    <div class="container">
        <div class="row text-center text-xs-center text-sm-left text-md-left">
            <div class="col-xs-12 col-sm-4 col-md-3">

                <ul class="list-unstyled quick-links">
                    <li><a href="Index.php#AboutUs"><i class="fa fa-angle-double-right"></i>About Us</a></li>
                    <li><a href="Index.php#Customer"><i class="fa fa-angle-double-right"></i>Customer Support</a></li>
                    <li><a href="Index.php#FAQ"><i class="fa fa-angle-double-right"></i>FAQ</a></li>

                </ul>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4">

                <ul class="list-unstyled quick-links">
                    <li><a href="Footer2.php"><i class="fa fa-angle-double-right"></i>Terms and Conditions</a></li>
                    <li><a href="Footer2.php"><i class="fa fa-angle-double-right"></i>Privacy Policy</a></li>
                    <li><a href="Footer2.php"><i class="fa fa-angle-double-right"></i>Commissions and Fees</a></li>

                </ul>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4">

                <ul class="list-unstyled quick-links">
                    <li class="list-inline-item"><a href=""><i class="fa fa-facebook"></i></a></li>
                    <li class="list-inline-item"><a href=""><i class="fa fa-twitter"></i></a></li>
                    <li class="list-inline-item"><a href=""><i class="fa fa-instagram"></i></a></li>
                    <li class="list-inline-item"><a href=""><i class="fa fa-google-plus"></i></a></li>
                    <li class="list-inline-item"><a href="" target="_blank"><i class="fa fa-envelope"></i></a></li>

                    <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2  text-white">
                        <p class="h6">&copy ClassicGamer.net All right Reversed</p>
                    </div>
                </ul>
            </div>
        </div>

    </div>
</section>
<!-- ./Footer -->

</body>
</html>
