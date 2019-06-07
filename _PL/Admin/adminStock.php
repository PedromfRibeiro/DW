<div>
    <div class="Section">
<div class="Content">
    <div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
                        <h2>Manage <b>Stock</b></h2>
                    </div>
                    <div class="col-sm-6">
                        <form method="post">
                            <a href="" class="btn btn-success" data-toggle="modal" data-target="#myCreateModal"><i
                                        class="material-icons">&#xE147;</i> <span>Add New Generos</span></a>
                        </form>
                    </div>
                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                <tr>
                    <th>quantidade</th>
                    <th>Jogo</th>
                </tr>
                </thead>
                <?php
                $GenStock = StockController::StockRead();
                while ($rowSt = $GenStock ->fetch()) {
                $id = $rowSt['idStock'];
                $Nome = $rowSt['quantidade'];
                $joo = JogoController::GetJogoByIDNonObj($rowSt['idJogo']);
                echo '<tr>';

                echo '<td>' . $Nome . '</td>';
                echo '<td>' . $joo['nome'] . '</td>';
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
                            <h4 class="modal-title">Atualizar quantidade</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>

                        <div class="modal-body">
                            <form enctype="multipart/form-data" method="post" data-ajax='false'>
                                <label for="Nome"><b> Quantidade</b></label>
                                <input class="form-control" type="text" placeholder="Enter Quantidade" name="quan"
                                       value="<?php echo $Nome ?>" required>
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
                                <input name="idStock" value="<?php echo $rowSt['idStock'] ?>" hidden>



                                <button type="submit" class="btn btn-primary" name="Update_Stock">Save changes
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
                    <label for="Quantidade"><b> Jogo</b></label>
                    <input class="form-control" type="text" value="<?php echo $joo['nome'] ?>" disabled>
                    <label for="Quantidade"><b> Quantidade</b></label>

                    <input class="form-control" type="text" value="<?php echo $Nome ?>" disabled>
                    <input name="idStock" value="<?php echo $rowSt['idStock'] ?>" hidden>
                    <br>
                    <button name="Delete_Stock">Sim</button>
                </form>
            </div>
        </div>
    </div>

    <?php
    }
    ?></div>
    <div class="modal fade" id="myCreateModal">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-header">
                    <h4 class="modal-title">Criar quantidade</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <div class="modal-body">
                    <form enctype="multipart/form-data" method="post" data-ajax='false'>
                        <label for="Nome"><b> Quantidade</b></label>
                        <input class="form-control" type="text" placeholder="Enter Name" name="quan" required>
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
                        <button type="submit" class="btn btn-primary" name="Create_Stock">Create</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </form>
                </div>


            </div>
        </div>
    </div>
    </table>
</div>
</div>


</body>

