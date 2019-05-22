<?php
session_start();?>
<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <?php include "_includes/Head.php";?>
    <title>The Classic Gamer</title>
    <link type="text/css" rel="stylesheet" href="../_css/Styles.css" />
    <link type="text/css" rel="stylesheet" href="../_css/Header.css" />
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
                if(1){
                    ?>
                    <li class="nav-item">
                        <a class="nav-link" id="loginCSS" href="?page=Login/login">Login </a></li>
                    <li class="nav-item">
                        <a class="nav-link" id="loginCSS" href="?page=Login/Register">Register </a></li>
                <?php } ?>

                <?php
                if(1){
                    ?>
                    <li class="nav-item">
                        <a class="nav-link" id="loginCSS" href="?page=Logout">Logout </a></li>
                <?php } ?>
                <li class="nav-item">
                    <a class="nav-link" href="?page=Profile">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="?page=Shopping_cart">Shopping Cart</a>
                </li>
            </ul>

        </div>
    </nav>
</header>
<!-- Header -->

<?php
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
