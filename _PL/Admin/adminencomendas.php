<body>
<div class="container">
    <div class="table-wrapper">
        <div class="table-title">
            <div class="row">
                <div class="col-sm-6">
                    <h2>Manage <b>Encomenda</b></h2>
                </div>
                <div class="col-sm-6">
                    <form method="post">
                        <a href="" class="btn btn-success" data-toggle="modal" data-target="#myCreateModal"><i
                                    class="material-icons">&#xE147;</i> <span>Add New Encomenda</span></a>
                    </form>
                </div>
            </div>
        </div>
        <table class="table table-striped table-hover">
            <thead>
            <tr>

                <th>Data de Encomenda</th>
                <th>Valor</th>
                <th>Estado</th>
                <th>Utilizador</th>
                <th>Editar</th>
                <th>Eliminar</th>

            </tr>
            </thead>
            <?php
            $BFetch = EncomendaController::ReadEncALL();
            while ($row = $BFetch->fetch()) {

            $id = $row['idEncomenda'];
            $data_enc = $row['data_enc'];
            $Valor = $row['Valor'];
            $Finalizada = $row['Finalizada'];
            $id_utilizador = UserController::GetOneUtilbyid($row['id_utilizador']);


            echo '<tr>';
            echo '<td>' . $data_enc . '</td>';
            echo '<td>' . $Valor . '</td>';
            if ($Finalizada ==1){            echo '<td>Finalizada</td>';
            }
            if ($Finalizada ==0){            echo '<td>Não Finalizada</td>';
            }
            echo '<td>' . $id_utilizador["Nome"] . '</td>';
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
                        <h4 class="modal-title">Atualizar Encomenda</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <div class="modal-body">
                        <form enctype="multipart/form-data" method="post" data-ajax='false'>
                            <label for="data_enc"><b>Enter Data de Encomenda</b></label>
                            <input class="form-control" type="date" placeholder="Enter Data de Encomenda" name="data_enc"
                                   value="<?php echo $data_enc ?>">
                            <br>
                            <label for="Finalizad"><b>Finalizada</b></label>
                            <select class="form-control"  name="Finalizada" >
                                <option VALUE="0">Nao Finalizada</option>
                                <option VALUE="1">Finalizada</option>
                            </select>
                            <br>
                            <label for="Valor"><b> Valor Total </b></label>
                            <input class="form-control" type="number" placeholder="Enter Valor Total"
                                   name="Valor" value="<?php echo $Valor ?>">

                            <label for="Finalizada"><b>Utilizador</b></label>
                            <input class="form-control" type="text" placeholder="<?php echo $id_utilizador['Nome'] ?>"disabled>

                            <input class="form-control" type="text" name="idUti" value="<?php echo $id_utilizador['idUtilizador']?>" hidden>
                            <br>
                            <input class="form-control" type="number" name="idEnc" value="<?php echo $id ?>"hidden>

                            <button type="submit" class="btn btn-primary" name="Update_Encomenda">Save changes
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
                <label for="data_enc"><b> data_enc</b></label>
                <input class="form-control" type="text" value="<?php echo $data_enc ?>" disabled>
                <input class="form-control" type="number" name="idEnc" value="<?php echo $id ?>"hidden>
                <br>
                <button name="Delete_Encomenda">Sim</button>
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
                <h4 class="modal-title">Criar Encomenda</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <div class="modal-body">
                <form enctype="multipart/form-data" method="post" data-ajax='false'>
                    <label for="data_enc"><b>Enter Data de Encomenda</b></label>
                    <input class="form-control" type="date" placeholder="Enter Data de Encomenda" name="data_enc">
                    <br>
                    <label for="Finalizad"><b>Finalizada?</b></label>
                    <select class="form-control"  name="Finalizada">
                        <option VALUE="0">Nao Finalizada</option>
                        <option VALUE="1">Finalizada</option>
                    </select>
                    <br>
                    <label for="Valor"><b> Valor Total </b></label>
                    <input class="form-control" type="number" placeholder="Enter Valor Total" name="Valor" >

                    <br>

                    <label for="Utilizador"><b>Utilizador</b></label>
                    <select class="form-control" name="idUti">
                        <?php
                        $rowUser = UserController::GetAllUtil();
                        while ($rowUsers = $rowUser->fetch())
                            echo '<option VALUE="' . $rowUsers['idUtilizador'] . '">' . $rowUsers['Nome'] . '</option>'

                        ?>
                    </select>
                    <br>
                    <button type="submit" class="btn btn-primary" name="Create_Encomenda">Save changes
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