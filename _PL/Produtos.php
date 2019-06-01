<body>
<?php
require_once dirname(__FILE__) . '/../_BL/Plataforma.php';
require_once dirname(__FILE__) . '/../_BL/Genero.php';
?>

  <!-- Page Content -->
  <div class="container">

    <div class="row">

      <div class="col-lg-3">
          <div class="card">
              <article class="card-group-item">
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
                      </div> <!-- card-body.// -->
                  </div>
              </article> <!-- card-group-item.// -->

          </div> <!-- card.// -->

              <div class="card">
                  <article class="card-group-item">
                      <header class="card-header">
                          <h6 class="title">Plataformas </h6>
                      </header>
                      <div class="filter-content">
                          <div class="card-body">
                              <form>
                                  <?php
                                  $POD = new Plataforma('','');
                                  $BFetch = ($POD->ReadALL());
                                  while ($row = $BFetch->fetch()) {
                                      echo '<label class="form-check">';
                                      echo '<input class="form-check-input" type="checkbox" value=""></td>';
                                      echo '<span class="form-check-label">' . $row['Plataforma'] . '</span>';
                                      echo '</label>';
                                  }
                                  $POD=$row=null;
                                  $BFetch->closeCursor();
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
                                  require_once 'C:/xampp/htdocs/DWphp/_BL/Genero.php';

                                  $PODe = new Genero('','');
                                  $BFeetch = ($PODe->ReadALL());
                                  while ($rowe = $BFeetch->fetch()) {
                                      echo '<label class="form-check">';
                                      echo '<input class="form-check-input" type="radio" name="exampleRadio" value="">';
                                      echo '<span class="form-check-label">' . $rowe['genero'] . '</span>';
                                      echo '</label>';
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
             require_once 'C:/xampp/htdocs/DWphp/_BL/Jogo.php';

            $POD = new Jogo('','','','','','');
            $BFetch = ($POD->ReadALL());
            while ($row = $BFetch->fetch()) {
                echo '<div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                <a href="?page=Produto&jogo='. $row['idJogo'] .'">'. $row['nome'] .'</a>
                </h4>
                <h5>'. $row['preco'] .'</h5>
                <p class="card-text">'. $row['descricao'] .'</p>
              </div>
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
              </div>
            </div>
          </div>';
            }
            $_SESSION['Jogo']=
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
