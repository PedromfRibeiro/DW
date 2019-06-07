<div>
    <div class="Section">
<div class="Content">
    <div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
                        <h2>Manage <b>Plataformas</b></h2>
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
                    <th></th>
                    <th>Plataforma</th>
                    <th>Imagem</th>
                </tr>
                </thead>
                <?php
                $GenFetch = PlataformaController::GetPlataformaALL();
                while ($rowPlat = $GenFetch ->fetch()) {
                $id = $rowPlat['id'];
                $Nome = $rowPlat['Plataforma'];
                $idPlataforma = PlataformaController::GetPlataforma($rowPlat['id']);
                echo '<tr>';
                echo '<td><img class="img-fluid mx-auto Img" src="data:image/jpeg;base64,' . base64_encode($rowPlat['ImagemPlat']) . '" alt=""></td>';
                echo '<td>' . $Nome . '</td>';
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
                            <h4 class="modal-title">Atualizar Plataforma</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>

                        <div class="modal-body">
                            <form enctype="multipart/form-data" method="post" data-ajax='false'>
                                <label for="Nome"><b> Nome</b></label>
                                <input class="form-control" type="text" placeholder="Enter Name" name="Nome"
                                       value="<?php echo $Nome ?>" required>
                                <br>
                                <label>Imagem</label>
                                <input class="form-control" type="file" name="Imagem" required/>
                                <br>
                                <input name="idPlat" value="<?php echo $rowPlat['id'] ?>" hidden>

                                <button type="submit" class="btn btn-primary" name="Update_Plat">Save changes
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
                    <input name="idPlat" value="<?php echo $rowPlat['id'] ?>" hidden>
                    <br>
                    <button name="Delete_Plat">Sim</button>
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
                    <h4 class="modal-title">Criar Plataforma</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <div class="modal-body">
                    <form enctype="multipart/form-data" method="post" data-ajax='false'>
                        <label for="Nome"><b> Nome</b></label>
                        <input class="form-control" type="text" placeholder="Enter Name" name="Nome" required>
                        <br>
                        <label for="Imagem"><b> Imagem</b></label>
                        <input class="form-control" type="file" name="Imagem" required>

                        <button type="submit" class="btn btn-primary" name="Create_Plat">Create</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </form>
                </div>


            </div>
        </div>
    </div>
    </table>
</div>
</div>
</div>    </div>    </div>   <div class="Content">
    <div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
                        <h2>Manage <b>Generos</b></h2>
                    </div>
                    <div class="col-sm-6">
                        <form method="post">
                            <a href="" class="btn btn-success" data-toggle="modal" data-target="#myCreateModalGen"><i
                                        class="material-icons">&#xE147;</i> <span>Add New Generos</span></a>
                        </form>
                    </div>
                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                <tr>
                    <th></th>
                    <th>Genero</th>
                    <th>Imagem</th>
                </tr>
                </thead>
                <?php
                $GenFetch = GenerosController::GetGenerosAll();
                while ($rowGen = $GenFetch->fetch()) {
                $idGen = $rowGen['idGenero'];
                $Nome = $rowGen['genero'];
                echo '<tr>';
                echo '<td><img class="img-fluid mx-auto Img" src="data:image/jpeg;base64,' . base64_encode($rowGen['ImagemGen']) . '" alt=""></td>';
                echo '<td>' . $Nome . '</td>';
                echo '<td>';
                echo '<a     href=""  id="' . $idGen . '"  class="edit"   data-toggle="modal" data-target="#myUpModalGen' . $idGen . '"><i class="material-icons" title="Edit" >&#xE254;</i></a>';
                echo '<td>';
                echo '<a     href=""  id="' . $idGen . '"  class="delete" data-toggle="modal" data-target="#myDELModalGen' . $idGen . '"><i class="material-icons" title="Delete">&#xE872;</i></a>';
                echo '</td>';
                echo '</tr>';


                echo '<div class="modal fade" id="myUpModalGen' . $idGen . '">'; ?>
                <div class="modal-dialog">
                    <div class="modal-content">


                        <div class="modal-header">
                            <h4 class="modal-title">Atualizar Genero</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>

                        <div class="modal-body">
                            <form enctype="multipart/form-data" method="post" data-ajax='false'>
                                <label for="Nome"><b> Nome</b></label>
                                <input class="form-control" type="text" placeholder="Enter Name" name="Nome"
                                       value="<?php echo $Nome ?>" required>
                                <br>
                                <label>Imagem</label>
                                <input class="form-control" type="file" name="ImagemGen" required/>
                                <br>
                                <input name="idGen" value="<?php echo $rowGen['idGenero'] ?>" hidden>

                                <button type="submit" class="btn btn-primary" name="Update_Gen">Save changes
                                </button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </form>
                        </div>


                    </div>
                </div>
        </div>
        <?php
        echo '<div class="modal fade" id="myDELModalGen' . $idGen . '">'; ?>
        <div class="modal-dialog">
            <div class="modal-content">


                Tem a certeza que quer eliminar?
                <form method="post">
                    <label for="Nome"><b> Nome</b></label>
                    <input class="form-control" type="text" value="<?php echo $Nome ?>" disabled>
                    <input name="idGen" value="<?php echo $rowGen['idGenero'] ?>" hidden>
                    <br>
                    <button name="Delete_Gen">Sim</button>
                </form>
            </div>
        </div>
    </div>

    <?php
    }
    ?>
    <div class="modal fade" id="myCreateModalGen">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-header">
                    <h4 class="modal-title">Criar Generos</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <div class="modal-body">
                    <form enctype="multipart/form-data" method="post" data-ajax='false'>
                        <label for="Nome"><b> Nome</b></label>
                        <input class="form-control" type="text" placeholder="Enter Name" name="Nome" required>
                        <br>
                        <label for="ImagemGen"><b> Imagem</b></label>
                        <input class="form-control" type="file" name="ImagemGen" required>

                        <button type="submit" class="btn btn-primary" name="Create_Gen">Create</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </form>
                </div>


            </div>
        </div>
    </div>


    </table>
</div>     </div>
</body>

