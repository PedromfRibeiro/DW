<body>

<ul class="breadcrumb">
    <li><a href="http://localhost/DWphp/Index.php?page=MainPage">Home</a></li>
    <li>Plataforma</li>
</ul>

<div class="plat">
    <div class="column">
    </div>
    <div class="column">
        <div class="row" id="box-search">
            <?php
            $PlatFetch = PlataformaController::GetPlataformaALL();
            while ($rowPlat = $PlatFetch->fetch()) {
                $idPlat = $rowPlat['id'];
                $Nome = $rowPlat['Plataforma'];
                echo '
                <div class="wrapper" >
                <a href="?page=Produtos&idGen=0&Plat='.$idPlat.'">
                    <img class="img-responsive" src="data:image/jpeg;base64,'.base64_encode($rowPlat['ImagemPlat']) . '" alt="">
                </a>
                <div class="overlay">
                    <p>' . $Nome . '</p></div></div>';}?>




        </div>

        <div class="column">

        </div>
    </div>
</div>

</body>