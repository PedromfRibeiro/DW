<body>
<div class="container">
    <div class="table-wrapper">
        <div class="table-title">
            <div class="row">
                <div class="col-sm-6">
                    <h2>Manage <b>Venda</b></h2>
                </div>
                <div class="col-sm-6">
                    <form method="post">
                        <a href="" class="btn btn-success" data-toggle="modal" data-target="#myCreateModal"><i
                                    class="material-icons">&#xE147;</i> <span>Add New Venda</span></a>
                    </form>
                </div>
            </div>
        </div>
        <table class="table table-striped table-hover">
            <thead>
            <tr>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th>Encomenda</th>
                <th>Encomenda</th>
                <th></th>
                <th></th>
            <tr>
                <th>Data de Encomenda</th>
                <th>Valor</th>
                <th>Estado</th>
                <th>Jogo</th>
                <th>Data</th>
                <th>Nome</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
            </tr>
            </thead>
            <?php
            $BFetch = VendaController::ReadVendaALL();
            while ($row = $BFetch->fetch()) {

            $id = $row['idVenda'];
            $data_enc = $row['Data'];
            $Valor = $row['Valor'];
            $Quantidade=$row['quantidade'];
            $Finalizada = $row['quantidade'];
            $id_Jogo=JogoController::GetJogoByIDNonObj($row['id_jogo']);
            $id_Encomenda = EncomendaController::ReadEncomenda($row['id_Encomenda']);
            $Utilizador=UserController::GetOneUtilbyid($id_Encomenda['id_utilizador']);

            echo '<tr>';
            echo '<td>' . $data_enc . '</td>';
            echo '<td>' . $Valor . '</td>';
            if ($Finalizada ==1){  $af='Finalizada';          echo '<td>Finalizada</td>';
            }
            if ($Finalizada ==0){   $af='Não Finalizada';         echo '<td>Não Finalizada</td>';
            }
            echo '<td>' . $id_Jogo["nome"] . '</td>';
            echo '<td>' . $id_Encomenda["data_enc"] . '</td>';
            echo '<td>' . $Utilizador["Nome"].'</td>';

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
                        <h4 class="modal-title">Atualizar Venda</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <div class="modal-body">
                        <form enctype="multipart/form-data" method="post" data-ajax='false'>
                            <label for="data_enc"><b>Enter Data de Venda</b></label>
                            <input class="form-control" type="date" placeholder="Enter Data de Encomenda" name="data_enc"
                                   value="<?php echo $data_enc ?>" required>
                            <br>
                            <label for="Valor"><b> Valor Total </b></label>
                            <input class="form-control" type="number" placeholder="Enter Valor Total"
                                   name="Valor" value="<?php echo $Valor ?>"required>
                            <br>
                            <label for="Quantidade"><b> Quantidade </b></label>
                            <input class="form-control" type="number" placeholder="Enter Quantidade"
                                   name="Quantidade" value="<?php echo $Quantidade ?>"required>
                            <br>
                            <label for="Jogo"><b>Jogo</b></label>
                            <select class="form-control" name="idJogo">
                                <?php
                                $rowJogo = JogoController::ReadJogoALL();
                                echo'<option selected="selected" VALUE="' . $id_Jogo['idJogo'] . '">' . $id_Jogo['nome'] . '</option>';

                                while ($rowJog = $rowJogo->fetch())
                                    echo '<option VALUE="' . $rowJog['idJogo'] . '">' . $rowJog['nome'] . '</option>'

                                ?>
                            </select>
                            <br>
                            <label for="Enc"><b>Encomenda</b></label>


                            <select class="form-control" name="idEnc">
                                <?php
                                $rowEnc = EncomendaController::ReadEncALL();
                                echo'<option selected="selected">Data de Encomenda: ' . $id_Encomenda['data_enc']  . ' || User: '.$Utilizador['Nome'].'  </option>';
                                while ($rowEnco = $rowEnc->fetch()){
                                    $rowUser = UserController::GetOneUtilbyid($rowEnco['id_utilizador']);
                                    echo '<option VALUE="'. $rowEnco['idEncomenda'] .'">Data de Venda: ' . $rowEnco['data_enc'].' || User: '.$rowUser['Nome'].'</option>';}

                                ?>
                            </select>
                            <br>
                            <input name="id" value="<?php echo $id ?>" hidden>
                            <button type="submit" class="btn btn-primary" name="Update_Venda">Save changes
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
                <label for="data_enc"><b> Data de Venda</b></label>
                <input class="form-control" type="text" value="<?php echo $data_enc ?>" disabled>
                <label for="data_enc"><b> Nome Associado</b></label>
                <input class="form-control" type="text" value="<?php echo $Utilizador["Nome"] ?>" disabled>
                <input class="form-control" type="number" name="idVenda" value="<?php echo $id ?>"hidden>
                <br>
                <button name="Delete_Venda">Sim</button>
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
                <h4 class="modal-title">Criar Venda</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <div class="modal-body">
                <form enctype="multipart/form-data" method="post" data-ajax='false'>
                    <label for="data_enc"><b>Enter Data de Venda</b></label>
                    <input class="form-control" type="date" placeholder="Enter Data de Venda" name="data_venda"required>
                    <br>
                    <label for="Valor"><b>Valor</b></label>
                    <input class="form-control" type="text" placeholder="Enter Valor" name="Valor"required>

                    <br>
                    <label for="Quantidade"><b> Quantidade </b></label>
                    <input class="form-control" type="number" placeholder="Enter Quantidade" name="Quantidade" value="1" required>

                    <br>
                    <label for="Jogo"><b>Jogo</b></label>
                    <select class="form-control" name="idJogo">
                        <?php
                        $rowJogo = JogoController::ReadJogoALL();
                        while ($rowJog = $rowJogo->fetch())
                            echo '<option VALUE="' . $rowJog['idJogo'] . '">' . $rowJog['nome'] . '</option>'

                        ?>
                    </select>
                    <br>
                    <label for="Enc"><b>Encomenda</b></label>


                    <select class="form-control" name="idEnc">
                        <?php
                        $rowEnc = EncomendaController::ReadEncALL();
                        while ($rowEnco = $rowEnc->fetch()){
                            $rowUser = UserController::GetOneUtilbyid($rowEnco['id_utilizador']);
                            echo '<option VALUE="'. $rowEnco['idEncomenda'] .'">Data de Venda: ' . $rowEnco['data_enc'].' || User: '.$rowUser['Nome'].'</option>';}

                        ?>
                    </select>
                    <br>

                    <br>
                    <button type="submit" class="btn btn-primary" name="Create_Venda">Save changes
                    </button>
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