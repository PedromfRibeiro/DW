<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <script src="_js/Produto.js"></script>
    <?php
    include '_Includes/Header.html';
    ?>

    <link href="_css/Produto.css" rel="stylesheet">
    <meta name="robots" content="noindex,follow" />

</head>


<body>

<div class="plat">
    <div class="indexdiv ">
        <div class="left-column">
            <img src="https://images.gog.com/e34b4189894110990510f1334151555bd1c0ed45926c5c8cbc7e9b80aa6744d1_product_card_v2_mobile_slider_639.jpg" alt="">
        </div>
    </div>
    <div class="indexdiv ">
        <div class="right-column">

            <!-- Product Description -->
            <div class="product-description">
                <h1>The Witcher 3</h1>
                <h3>#Plataforma#</h3>
                <h3>#Genero#</h3>

                <p>The Witcher® 3: Wild Hunt is a story-driven, next-generation open world role-playing game, set in a visually stunning fantasy universe, full of meaningful choices and impactful consequences. You play as Geralt of Rivia, a monster hunter tasked with finding a child from an ancient prophecy.

                    Geralt of Rivia, is a witcher, or monster hunter for hire, a white-haired and cat-eyed legend in his own time. Trained from early childhood and mutated to gain superhuman skills, strength and reflexes, witchers like Geralt are a natural consequence of and counterbalance to the monster-infested world in which they live. As Geralt, you’ll embark on an epic journey in a war-ravaged world that will inevitably lead you to confront a foe darker than anything humanity has faced so far—the Wild Hunt.</p>
            </div>

            <!-- Product Configuration -->
            <div class="product-configuration">

                <div class="plat ">
                    <div class="left-column">
                        <h2>Price:30€</h2>
                    </div>
                    <div class="right-column">
                        <div class="form-group">
                            <input type="submit" value="Buy It!">
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<div>
    <button class="tablink" onclick="openPage('Home', this,)">Imagens</button>
    <button class="tablink" onclick="openPage('News', this,)" id="defaultOpen">System Requirements</button>
    <button class="tablink" onclick="openPage('Contact', this,)">Premios</button>
    <button class="tablink" onclick="openPage('Contact1', this,)">Can You Run It?</button>


    <div id="Home" class="tabcontent">
        <h3>Imagens</h3>
        <p>Home is where the heart is..</p>
    </div>

    <div id="News" class="tabcontent">
        <h3>Here are the The Witcher 3: Wild Hunt System Requirements (Minimum)</h3>
        <p>CPU: Intel CPU Core i5-2500K 3.3GHz / AMD CPU Phenom II X4 940</p>
        <p> CPU SPEED: Info</p>
        <p> RAM: 6 GB</p>
        <p> OS: 64-bit Windows 7 or 64-bit Windows 8 (8.1)</p>
        <p> VIDEO CARD: Nvidia GPU GeForce GTX 660 / AMD GPU Radeon HD 7870</p>
        <p> PIXEL SHADER: 5.0</p>
        <p> VERTEX SHADER: 5.0</p>
        <p>  FREE DISK SPACE: 40 GB</p>
        <p>  DEDICATED VIDEO RAM: 1.5 GB
        </p>
        <h3>    The Witcher 3: Wild Hunt Recommended Requirements</h3>
        <p>   CPU: Intel CPU Core i7 3770 3.4 GHz / AMD CPU AMD FX-8350 4 GHz</p>
        <p>  CPU SPEED: Info</p>
        <p>  RAM: 8 GB</p>
        <p>   OS: 64-bit Windows 7 or 64-bit Windows 8 (8.1)</p>
        <p>  VIDEO CARD: Nvidia GPU GeForce GTX 770 / AMD GPU Radeon R9 290</p>
        <p>   PIXEL SHADER: 5.0</p>
        <p>  VERTEX SHADER: 5.0</p>
        <p>   FREE DISK SPACE: 40 GB</p>
           <p> DEDICATED VIDEO RAM: 2 GB</p>

    </div>

    <div id="Contact" class="tabcontent">
        <h3>Contact</h3>
        <p><blockquote class="embedly-card"><h4><a href="https://pt.wikipedia.org/wiki/Lista_de_pr%C3%AAmios_e_indica%C3%A7%C3%B5es_recebidos_por_The_Witcher_3:_Wild_Hunt">Lista de prêmios e indicações recebidos por The Witcher 3: Wild Hunt - Wikipédia, a enciclopédia livre</a></h4><a>Esta é uma lista de prêmios e indicações recebidos por The Witcher 3: Wild Hunt (em polonês: Wiedźmin 3: Dziki Gon), um jogo eletrônico de ação e fantasia desenvolvido pela CD Projekt RED que foi lançado mundialmente no dia 19 de maio de 2015 para as plataformas Microsoft Windows, PlayStation 4 e Xbox One.</blockquote>
        <script async src="//cdn.embedly.com/widgets/platform.js" charset="UTF-8"></script></p>
    </div>
    <div id="Contact1" class="tabcontent">
        <h3>Can You Run It?</h3>
        <p><blockquote class="embedly-card"><h4><a href="https://www.systemrequirementslab.com/cyri/requirements/the-witcher-3-wild-hunt/12446">The Witcher 3: Wild Hunt Requirements Test</a></h4><>Check the The Witcher 3: Wild Hunt system requirements. Can I Run it? Test your specs and rate your gaming PC.</blockquote>
        <script async src="//cdn.embedly.com/widgets/platform.js" charset="UTF-8"></script></p>
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
