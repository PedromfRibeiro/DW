<body>

<ul class="breadcrumb">
    <li><a href="http://localhost/DWphp/Index.php?page=MainPage">Home</a></li>
    <li>Produtos</li>
</ul>

<?php
require_once dirname(__FILE__) . '/../_BL/Plataforma.php';
require_once dirname(__FILE__) . '/../_BL/Genero.php';
?>

  <!-- Page Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-3">
          <div class="card">



              <!--  <article class="card-group-item">
                  <header class="card-header">
                      <h6 class="title">Range input </h6>
                  </header>
                  <div class="filter-content">
                      <div class="card-body">
                          <div class="form-row">
                              <div class="form-group col-md-6">
                                  <label>Min</label>
                                  <input type="number" class="form-control" id="inputEmail4" placeholder="$0">
                              </div>
                              <div class="form-group col-md-6 text-right">
                                  <label>Max</label>
                                  <input type="number" class="form-control" placeholder="$10">
                              </div>
                          </div>
                      </div>
                  </div>
              </article>               -->

          </div>

              <div class="card">
                  <article class="card-group-item">
                      <header class="card-header">
                          <h6 class="title">Plataformas </h6>
                      </header>
                      <div class="filter-content">
                          <div class="card-body">
                              <form>
                                  <?php
                                  $BFetch = PlataformaController::GetPlataformaALL();
                                  while ($row = $BFetch->fetch()) {
                                      echo'
                                      <div class="bts" >
                                      <a href="?page=Produtos&idGen=0&Plat='.$row['id'].'">
                                      <button type="button" class="btn btn-secondary btn-sm">'.$row['Plataforma'].'</button>
                                      </a>
                                      </div>
                                      ';

                                  }
                                  $POD=null;
                                  ?>
                              </form>

                          </div> <!-- card-body.// -->
                      </div>
                  </article> <!-- card-group-item.// -->

                  <article class="card-group-item">
                      <header class="card-header">
                          <h6 class="title">Generos </h6>
                      </header>
                      <div class="filter-content">
                          <div class="card-body">
                              <form>
                                  <?php
                                  $BFeetch = GenerosController::GetGenerosAll();
                                  while ($rowe = $BFeetch->fetch()) {
                                      echo'
                                      <div class="bts" >
                                      <a href="?page=Produtos&idGen='.$rowe['idGenero'].'&Plat=0">
                                      <button type="button" class="btn btn-secondary btn-sm">'.$rowe['genero'].'</button>
                                      </a>
                                      </div>
                                      ';

                                  }
                                  $POD=null;
                                  ?>
                              </form>
                          </div> <!-- card-body.// -->
                      </div>
                  </article> <!-- card-group-item.// -->
              </div> <!-- card.// -->






      </div>
      <!-- /.col-lg-3 -->

      <div class="col-lg-9">
        <div class="row">

            <?php
            if(($_GET['idGen']!=0) && ($_GET['Plat']!=0)){
                $idGen=0;
                $BFetch = JogoController::ReadJogobyGen(0);

            }
            else if($_GET['idGen']!=0){$BFetch = JogoController::ReadJogobyGen($_GET['idGen']);}
            else if($_GET['Plat']!=0){$BFetch = JogoController::ReadJogobyPlat($_GET['Plat']);}

else {
    $idGen=0;
    $idPlat=0;
    $BFetch = JogoController::ReadJogobyGen(0);

}

            while ($row = $BFetch->fetch()) {
                echo '<div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="img-fluid mx-auto Img" src="data:image/jpeg;base64,'.base64_encode($row['Imagem']). '"></a>
              <div class="card-body">
                <h4 class="card-title">
                <a href="?page=Produto&jogo='. $row['idJogo'] .'">'. $row['nome'] .'</a>
                </h4>
                <h5>'. $row['preco'] .'€</h5>
                <p class="card-text">'. $row['descricao'] .'</p>
              </div>
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
              </div>
            </div>
          </div>';
            }

            $POD=null;
            ?>

        </div>
        <!-- /.row -->

      </div>
      <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->


</body>
