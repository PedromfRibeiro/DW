<meta charset="utf-8" />

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Optional JavaScript -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


    <title>The Classic Gamer</title>

    <link rel="stylesheet" type="text/css" href=" ../../_css/Styles.css" />
    <link rel="stylesheet" type="text/css" href="../../_css/Header.css"/>

    <!-- Header -->
    <header>

        <nav class="navbar md navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="Index.php">
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
                    if(empty($_SESSION)){
                        ?>
                        <li class="nav-item">
                            <a class="nav-link" id="loginCSS" href="index.php?=login">Login </a></li>
                        <li class="nav-item">
                            <a class="nav-link" id="loginCSS" href="index.php?=login">Register </a></li>
                    <?php } ?>

                    <?php
                    if(!empty($_SESSION)){
                    ?>
                    <li class="nav-item">
                        <a class="nav-link" id="loginCSS" href="index.php?=login">Logout </a></li><?php
                    }
                    ?>
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