<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="_css/Styles.css" type="text/css" rel="stylesheet"/>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <link rel="stylesheet" href="_css/ShoppingCart.css"/>


    <title>The Classic Gamer</title>

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
                        <input class="search_input" type="text" placeholder="Search...">
                        <a href="#" class="search_icon "><i class="fas fa-search"></i></a>
                    </div>
                </form>


                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="LogIn.php">Login </a>
                    </li>
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
    <!-- ./Header -->


</head>


<body>
<div class="container">
    <div class="row">
        <div class="panel-heading">
            <div class="panel-title">
                <div class="row">
                </div>
            </div>
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-xs-2"><img class="img-responsive" src="http://placehold.it/100x70">
                </div>
                <div class="col-xs-4">
                    <h4 class="product-name"><strong>Product name</strong></h4><h4><small>Product description</small></h4>
                </div>
                <div class="col-xs-6">
                    <div class="col-xs-6 text-right">
                        <h6><strong>25.00 <span class="text-muted">x</span></strong></h6>
                    </div>
                    <div class="col-xs-4">
                        <input type="text" class="form-control input-sm" value="1">
                    </div>
                    <div class="col-xs-2">
                        <button type="button" class="btn btn-link btn-xs">
                            <span class="glyphicon glyphicon-trash"> </span>
                        </button>
                    </div>
                </div>
            </div>
            <hr>

            <div class="row">
                <div class="col-xs-2"><img class="img-responsive" src="http://placehold.it/100x70">
                </div>
                <div class="col-xs-4">
                    <h4 class="product-name"><strong>Product name</strong></h4><h4><small>Product description</small></h4>
                </div>
                <div class="col-xs-6">
                    <div class="col-xs-6 text-right">
                        <h6><strong>25.00 <span class="text-muted">x</span></strong></h6>
                    </div>
                    <div class="col-xs-4">
                        <input type="text" class="form-control input-sm" value="1">
                    </div>
                    <div class="col-xs-2">
                        <button type="button" class="btn btn-link btn-xs">
                            <span class="glyphicon glyphicon-trash"> </span>
                        </button>
                    </div>
                </div>
            </div>

        </div>
        <div class="panel-footer">
            <div class="row text-center">
                <div class="col-xs-9">
                    <h4 class="text-right">Total <strong>$50.00</strong></h4>
                </div>
                <div class="col-xs-3">
                    <button type="button" class="btn">
                        Concluir Compra
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

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
                        <p class="h6">&copy ClassicGamer.net All right Reversed</a></p>
                    </div>
                </ul>
            </div>
        </div>

    </div>
</section>
<!-- ./Footer -->



</body>
</html>