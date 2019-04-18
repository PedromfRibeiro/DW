<!DOCTYPE html>
<html lang="pt-pt">

    <?php
    phpinfo();
    include '_Includes/Header.php';
    ?>
<head>
    <link href="_css/Admin_form.css" type="text/css" rel="stylesheet"/>

</head>
<body>

<div class="Section">
    <div class="indexdiv ">
        <div class="container1">

            <div class="row">
                <div class="col">
                    <h1>Add Produto</h1>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <form role="form">

                        <div class="form-group">
                            <label class="loginFormElement">Nome
                            <input class="form-control" placeholder="Name"></label>
                        </div>

                        <div class="form-group">
                            <label class="loginformelement" >Plataforma</label>
                        <select class="form-control">
                            <option>Android</option>
                            <option>Battle Net</option>
                            <option>Origin</option>
                            <option>Epic Games</option>
                            <option>Free2Play</option>
                            <option>GOC.COM</option>
                            <option>NCSOFT</option>
                            <option>Nintendo</option>
                            <option>Other</option>
                            <option>Playstation 3</option>
                            <option>Playstation 4</option>
                            <option>Steam</option>
                            <option>Uplay</option>
                            <option>Xbox 360</option>
                            <option>Xbox One</option>

                        </select>
                </div>

                        <div class="form-group">
                            <label class="loginformelement" >Genero</label>
                        <select class="form-control">

                            <option>Action</option>
                            <option>Adventure</option>
                            <option>Anime</option>
                            <option>Casual</option>
                            <option>Co-op</option>
                            <option>Fighting</option>
                            <option>FPS</option>
                            <option>Horror</option>
                            <option>Simulation</option>
                            <option>MMO</option>
                            <option>Courses</option>
                            <option>Open-World</option>
                            <option>Indie</option>
                            <option>Point&Click</option>
                            <option>Puzzle</option>
                            <option>Racing</option>
                            <option>RPG</option>
                            <option>Simulation</option>
                            <option>Sport</option>
                            <option>Story Rich</option>
                            <option>Strategy</option>
                            <option>Survival</option>
                            <option>3PS</option>
                            <option>VR Games</option>
                            <option>Subscription</option>

                        </select>
                        </div>

                        <div class="form-group">
                            <label class="loginFormElement">Embed Premios</label>
                            <input class="form-control input">
                        </div>
                        <div class="form-group">
                            <label class="loginFormElement">Embed Can you run it?</label>
                            <input class="form-control input">
                        </div>

                        <div class="form-group">
                            <label class="loginFormElement">Descrição</label>
                            <input class="form-control input-lg">
                        </div>
                        <div class="form-group">
                            <label class="loginFormElement">System Requirements</label>
                            <input class="form-control input-lg">
                        </div>


                        <div class="form-group">
                            <label class="loginformelement" >Preço</label>
                            <input class="form-control" placeholder="ex:'0000€'" type="text">
                        </div>

                        <div class="form-group">
                            <label class="control-label">Exmples Images</label>
                            <form action="/action_page.php">
                                Select images: <input type="file" name="img" multiple>
                                <input type="submit">
                            </form>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Product Image</label>
                            <input class="filestyle" data-icon="false" type="file">
                        </div>
                        <button type="submit" class="btn btn-success loginFormElement">Add Product</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <div class="indexdiv ">
        <div class="container1">

            <div class="row">
                <div class="col">
                    <h1>Add Plataforma or Genero</h1>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <form role="form">
                        <select class="form-control" id="productSelect"><option>Please Select a Product Group</option>
                            <option>Genero</option>
                            <option>Plataforma</option>
                        </select>
                        <div class="form-group">
                            <label class="loginFormElement">Nome</label>
                            <input class="form-control">
                        </div>

                        <div class="form-group">
                            <label class="loginformelement" for="productdescription">Label or Acronym</label>
                            <input id="productdescription" class="form-control" placeholder="ex:'MMORPG'" type="text">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Product Image</label>
                            <input class="filestyle" data-icon="false" type="file">
                        </div>
                        <button type="submit" id="loginSubmit" class="btn btn-success loginFormElement">Add Product</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



</body>
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
                    <li><a href=""><i class="fa fa-angle-double-right"></i>Terms and Conditions</a></li>
                    <li><a href=""><i class="fa fa-angle-double-right"></i>Privacy Policy</a></li>
                    <li><a href=""><i class="fa fa-angle-double-right"></i>Commissions and Fees</a></li>

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


</html>