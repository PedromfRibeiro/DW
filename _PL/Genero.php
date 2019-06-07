<body>

<ul class="breadcrumb">
    <li><a href="http://localhost/DWphp/Index.php?page=MainPage">Home</a></li>
    <li>Genero</li>
</ul>


<div class="plat">
    <div class="column">
    </div>
    <div class="column">
        <div class="row" id="box-search">
            <?php
            $GenFetch = GenerosController::GetGenerosAll();
            while ($rowGen = $GenFetch->fetch()) {
            $idGen = $rowGen['idGenero'];
            $Nome = $rowGen['genero'];
                echo '
                <div class="wrapper" >
                <a href="?page=Produtos&idGen='.$idGen.'&Plat=0 ">
                    <img class="img-responsive" src="data:image/jpeg;base64,'.base64_encode($rowGen['ImagemGen']) . '" alt="">
                </a>
                <div class="overlay">
                    <p>' . $Nome . '</p></div></div>';}?>




    </div>

        <div class="column">

        </div>
</div>
</div>

</body>