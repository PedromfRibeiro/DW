
<body>

<div class="plat">


    <?php
    require_once 'C:/xampp/htdocs/DWphp/_BL/Jogo.php';

    $POD = new Jogo('', '', '', '', '', '');
    $POD->idJogo = $_GET['jogo'];;
    $BFetch = ($POD->Read());

    echo '
         <div class="indexdiv ">
        <div class="left-column">
            <img src="https://images.gog.com/e34b4189894110990510f1334151555bd1c0ed45926c5c8cbc7e9b80aa6744d1_product_card_v2_mobile_slider_639.jpg" alt="">
        </div>
    </div>
    <div class="indexdiv ">
        <div class="right-column">

            <!-- Product Description -->
            <div class="product-description">
                <h1>' . $BFetch['nome'] . '</h1>
                <h3>' . $BFetch['idPlataforma'] . '</h3>
                <h3>' . $BFetch['idGenero'] . '</h3>

                <p>' . $BFetch['descricao'] . '</p>
            </div>

            <!-- Product Configuration -->
            <div class="product-configuration">

                <div class="plat ">
                    <div class="left-column">
                        <h2>Price:' . $BFetch['preco'] . '€</h2>
                    </div>
                    <div class="right-column">
                        <div class="form-group">
                        <form method="post">
                        <input type="text" name="preco" value="' . $BFetch['preco'] . '" hidden>
                        <input type="submit" name="Compra" value="Buy It!"> 
</form>
                            
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
        
        ';
    $POD = null;
    ?>


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
        <p> FREE DISK SPACE: 40 GB</p>
        <p> DEDICATED VIDEO RAM: 1.5 GB
        </p>
        <h3> The Witcher 3: Wild Hunt Recommended Requirements</h3>
        <p> CPU: Intel CPU Core i7 3770 3.4 GHz / AMD CPU AMD FX-8350 4 GHz</p>
        <p> CPU SPEED: Info</p>
        <p> RAM: 8 GB</p>
        <p> OS: 64-bit Windows 7 or 64-bit Windows 8 (8.1)</p>
        <p> VIDEO CARD: Nvidia GPU GeForce GTX 770 / AMD GPU Radeon R9 290</p>
        <p> PIXEL SHADER: 5.0</p>
        <p> VERTEX SHADER: 5.0</p>
        <p> FREE DISK SPACE: 40 GB</p>
        <p> DEDICATED VIDEO RAM: 2 GB</p>

    </div>

    <div id="Contact" class="tabcontent">
        <h3>Contact</h3>
        <p>
        <blockquote class="embedly-card"><h4><a
                        href="https://pt.wikipedia.org/wiki/Lista_de_pr%C3%AAmios_e_indica%C3%A7%C3%B5es_recebidos_por_The_Witcher_3:_Wild_Hunt">Lista
                    de prêmios e indicações recebidos por The Witcher 3: Wild Hunt - Wikipédia, a enciclopédia livre</a>
            </h4><a>Esta é uma lista de prêmios e indicações recebidos por The Witcher 3: Wild Hunt (em polonês:
                Wiedźmin 3: Dziki Gon), um jogo eletrônico de ação e fantasia desenvolvido pela CD Projekt RED que foi
                lançado mundialmente no dia 19 de maio de 2015 para as plataformas Microsoft Windows, PlayStation 4 e
                Xbox One.</blockquote>
        <script async src="//cdn.embedly.com/widgets/platform.js" charset="UTF-8"></script>
        </p>
    </div>
    <div id="Contact1" class="tabcontent">
        <h3>Can You Run It?</h3>
        <p>
        <blockquote class="embedly-card"><h4><a
                        href="https://www.systemrequirementslab.com/cyri/requirements/the-witcher-3-wild-hunt/12446">The
                    Witcher 3: Wild Hunt Requirements Test</a></h4><>Check the The Witcher 3: Wild Hunt system
            requirements. Can I Run it? Test your specs and rate your gaming PC.
        </blockquote>
        <script async src="//cdn.embedly.com/widgets/platform.js" charset="UTF-8"></script>
        </p>
    </div>
</div>


</body>

