<body>

<div class="plat">


    <?php
    require_once 'C:/xampp/htdocs/DWphp/_BL/Jogo.php';

    $BFetch = JogoController::ReadJogo($_GET['jogo']);
    $row = $BFetch->fetch();
    $Genero = JogoController::GetGeneros($row['idGenero']);
    $Platforma = JogoController::GetPlataforma($row['idPlataforma']);
    echo '

        <div class="left-column">
            <img class="img-fluid mx-auto Img" src="data:image/jpeg;base64,'.base64_encode($row['Imagem']). '"  alt="Responsive image">

    </div>
    <div class="indexdiv ">
        <div class="right-column">

            <!-- Product Description -->
            <div class="product-description">
                <h1>' . $row['nome'] . '</h1>
                <h3>' . $Platforma['Plataforma'] . '</h3>
                <h3>' . $Genero['genero'] . '</h3>

                <p>' . $row['descricao'] . '</p>
            </div>

            <div class="product-configuration">

                <div class="plat ">
                    <div class="left-column">
                        <h2>Price:' . $row['preco'] . '€</h2>
                    </div>
                    <div class="right-column">
                        <div class="form-group">
                        <form method="post">
                        <input type="text" name="preco" value="' . $row['preco'] . '" hidden>
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
</body>