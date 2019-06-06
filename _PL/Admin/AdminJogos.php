<body>
<div class="container">
    <div class="table-wrapper">
        <div class="table-title">
            <div class="row">
                <div class="col-sm-6">
                    <h2>Manage <b>Jogos</b></h2>
                </div>
                <div class="col-sm-6">
                    <form method="post">
                        <a href="" class="btn btn-success" data-toggle="modal" data-target="#myCreateModal"><i
                                    class="material-icons">&#xE147;</i> <span>Add New Jogo</span></a>
                    </form>
                </div>
            </div>
        </div>
        <table class="table table-striped table-hover">
            <thead>
            <tr>
                <th></th>
                <th>Nome</th>
                <th>Preco</th>
                <th>Descrição</th>
                <th>Genero</th>
                <th>Plataforma</th>
            </tr>
            </thead>
            <?php
            $BFetch = JogoController::ReadJogoALL();
            while ($row = $BFetch->fetch()) {

            $id = $row['idJogo'];
            $Nome = $row['nome'];
            $preco = $row['preco'];
            $descricao = $row['descricao'];
            $idGenero = GenerosController::GetGeneros($row['idGenero']);
            $idPlataforma = PlataformaController::GetPlataforma($row['idPlataforma']);


            echo '<tr>';
            echo '<td><img class="img-fluid mx-auto Img" src="data:image/jpeg;base64,' . base64_encode($row['Imagem']) . '" alt=""></td>';
            echo '<td>' . $Nome . '</td>';
            echo '<td>' . $preco . '</td>';
            echo '<td>' . $descricao . '</td>';
            echo '<td>' . $idGenero['genero'] . '</td>';
            echo '<td>' . $idPlataforma['Plataforma'] . '</td>';
            echo '<td>';
            echo '<a     href=""  id="' . $id . '"  class="edit"   data-toggle="modal" data-target="#myUpModal' . $id . '"><i class="material-icons" title="Edit" >&#xE254;</i></a>';
            echo '<td>';
            echo '<a     href=""  id="' . $id . '"  class="delete" data-toggle="modal" data-target="#myDELModal' . $id . '"><i class="material-icons" title="Delete">&#xE872;</i></a>';
            echo '</td>';
            echo '</tr>';


            echo '<div class="modal fade" id="myUpModal' . $id . '">'; ?>
            <div class="modal-dialog">
                <div class="modal-content">


                    <div class="modal-header">
                        <h4 class="modal-title">Atualizar Jogo</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <div class="modal-body">
                        <form enctype="multipart/form-data" method="post" data-ajax='false'>
                            <label for="Nome"><b> Nome</b></label>
                            <input class="form-control" type="text" placeholder="Enter Name" name="Nome"
                                   value="<?php echo $Nome ?>">
                            <br>
                            <label for="Nome"><b> Descricao</b></label>
                            <input class="form-control" type="text" placeholder="Enter Descrição" name="descricao"
                                   value="<?php echo $descricao ?>">
                            <br>
                            <label for="preco"><b> preco </b></label>
                            <input class="form-control" type="number" placeholder="Enter Preço"
                                   name="preco" value="<?php echo $preco ?>">

                            <label for="idGenero"><b> id Genero</b></label>
                            <input class="form-control" type="number" placeholder="Enter id Genero"
                                   name="idGenero" value="<?php echo $row['idGenero'] ?>">
                            <br>
                            <label for="idGenero"><b> id Genero</b></label>
                            <input class="form-control" type="number" placeholder="Enter id Plataforma"
                                   name="idPlataforma" value="<?php echo $row['idPlataforma'] ?>">
                            <br>
                            <label>Imagem</label>
                            <input class="form-control" type="file" name="Imagem"/>
                            <br>
                            <input name="idJogo" value="<?php echo $row['idJogo'] ?>" hidden>

                            <button type="submit" class="btn btn-primary" name="Update_Jogo">Save changes
                            </button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </form>
                    </div>


                </div>
            </div>
    </div>
    <?php
    echo '<div class="modal fade" id="myDELModal' . $id . '">'; ?>
    <div class="modal-dialog">
        <div class="modal-content">


            Tem a certeza que quer eliminar?
            <form method="post">
                <label for="Nome"><b> Nome</b></label>
                <input class="form-control" type="text" value="<?php echo $Nome ?>" disabled>
                <input name="idJogo" value="<?php echo $row['idJogo'] ?>" hidden>
                <br>
                <button name="Delete_Jogo">Sim</button>
            </form>
        </div>
    </div>
</div>

<?php
}
$BFetch->closeCursor();
$POD = null;
?>
<div class="modal fade" id="myCreateModal">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <h4 class="modal-title">Criar Jogo</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <div class="modal-body">
                <form enctype="multipart/form-data" method="post" data-ajax='false'>
                    <label for="Nome"><b> Nome</b></label>
                    <input class="form-control" type="text" placeholder="Enter Name" name="Nome">
                    <br>
                    <label for="Preço"><b> Preço </b></label>
                    <input class="form-control" type="text" placeholder="Enter Preço" name="preco">
                    <label for="Descricao"><b> Descricao </b></label>
                    <input class="form-control" type="text" placeholder="Enter Descricao" name="descricao">
                    <br>
                    <label for="Genero"><b> Genero</b></label>
                    <input class="form-control" type="number" placeholder="Enter Genero" name="idGenero">
                    <br>
                    <label for="Plataforma"><b> Plataforma</b></label>
                    <input class="form-control" type="number" placeholder="Enter Plataforma" name="idPlataforma">
                    <br>
                    <label for="Imagem"><b> Imagem</b></label>
                    <input class="form-control" type="file" name="Imagem">

                    <button type="submit" class="btn btn-primary" name="Create_Jogo">Create</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </form>
            </div>


        </div>
    </div>
</div>


</table>
<div class="clearfix">
    <div class="hint-text">Showing <b>1</b> out of <b>25</b> entries</div>
    <ul class="pagination">
        <li class="page-item"><a>Previous</a></li>
        <button class="page-item active" name="pagina" value="0"><a>0</a></button>
        <li class="page-item"><a>Next</a></li>
        <button type="button" name="nextpage">Next</button>

    </ul>
</div>
</div>
</div>

</body>
<?php
$_POST = array(); ?>