<body>
<div class="container">
    <div class="table-wrapper">
        <div class="table-title">
            <div class="row">
                <div class="col-sm-6">
                    <h2>Manage <b>Cliente</b></h2>
                </div>
                <div class="col-sm-6">
                    <form method="post">
                        <a href="" class="btn btn-success" data-toggle="modal" data-target="#myCreateModal"><i
                                    class="material-icons">&#xE147;</i> <span>Add New Cliente</span></a>
                    </form>
                </div>
            </div>
        </div>
        <table class="table table-striped table-hover">
            <thead>
            <tr>
                <th>Name</th>
                <th>Data de Registo</th>
                <th>Autorizaçao</th>
                <th>Data de Nascimento</th>
                <th>Email</th>
                <th>Code Hash</th>
                <th>Verify</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
            </thead>
            <?php
            $BFetch = UserController::GetAllUtil();
            $pn=0;
            $BFetch=UserController::schearPage();
            while ($row = $BFetch->fetch()) {

            $id = $row['idUtilizador'];
            $Nome = $row['Nome'];
            $Data_Registo = $row['Data_Registo'];
            $Autorizacao = $row['Autorizacao'];
            $Data_Nascimento = $row['Data_Nascimento'];
            $email = $row['email'];
            $code_hash = $row['code_hash'];
            $Verify = $row['Verify'];


            echo '<tr>';

            echo '<td>' . $row['Nome'] . '</td>';
            echo '<td>' . $row['Data_Registo'] . '</td>';
            if ($Autorizacao ==1){            echo '<td>Admin</td>';
            }
            if ($Autorizacao ==0){            echo '<td>Normal User</td>';
            }
            echo '<td>' . $row['Data_Nascimento'] . '</td>';
            echo '<td>' . $row['email'] . '</td>';
            echo '<td>' . $row['code_hash'] . '</td>';
            if ($Verify ==1){            echo '<td>Verificado</td>';
            }
            if ($Verify ==0){            echo '<td>Não Verificado</td>';
            }
            echo '<td>';
            echo '<a     href=""  id="' . $id . '"  class="edit"   data-toggle="modal" data-target="#myUpModal' . $id . '"><i class="material-icons" title="Edit" >&#xE254;</i></a>';
            echo '<td>';
            echo '<a  href=""  id="' . $id . '"  class="delete" data-toggle="modal" data-target="#myDELModal' . $id . '"><i class="material-icons" title="Delete">&#xE872;</i></a>';
            echo '</td>';
            echo '</tr>';


            echo '<div class="modal fade" id="myUpModal' . $id . '">'; ?>
            <div class="modal-dialog">
                <div class="modal-content">


                    <div class="modal-header">
                        <h4 class="modal-title">Atualizar Cliente</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <div class="modal-body">
                        <form method="Post">
                            <label for="Nome"><b> Nome</b></label>
                            <input class="form-control" type="text" placeholder="Enter Name" name="Nome"
                                   value="<?php echo $Nome ?>">
                            <br>
                            <label for="Data Nascimento"><b> Data de Nascimento </b></label>
                            <input class="form-control" type="date" placeholder="Enter Birth Date"
                                   name="Data_Nascimento" value="<?php echo $Data_Nascimento ?>">
                            <label for="email"><b> Email</b></label>
                            <input class="form-control" type="text" value="<?php echo $email ?>" disabled>
                            <input class="form-control" type="text" placeholder="Enter Email" name="email"
                                   value="<?php echo $email ?>" hidden>

                            <label for="Autorizaçao"><b> Autorizaçao</b></label>
                            <input class="form-control" type="number" placeholder="Enter Authorization"
                                   name="Autorizacao" value="<?php echo $Autorizacao ?>">
                            <br>
                            <label for="Code_hash"><b> Code Hash</b></label>
                            <input class="form-control" type="text" placeholder="Enter Code Hash" name="code_hash"
                                   value="<?php echo $code_hash ?>">
                            <label for="Verify"><b> Verify</b></label>
                            <input class="form-control" type="number" placeholder="Enter Verify" name="Verify"
                                   value="<?php echo $Verify ?>">

                            <br>
                            <button type="submit" class="btn btn-primary" name="Update_Cliente">Save changes
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
                <label for="email"><b> Email</b></label>
                <input class="form-control" type="text" value="<?php echo $email ?>" disabled>
                <input name="idUtilizador" value="<?php echo $id ?>" hidden>
                <br>
                <button name="DeleteCliente">Sim</button>
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
            <h4 class="modal-title">Criar Cliente</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <div class="modal-body">
            <form method="post">
                <label for="Nome"><b> Nome</b></label>
                <input class="form-control" type="text" placeholder="Enter Name" name="Nome">
                <br>
                <label for="Data Nascimento"><b> Data de Nascimento </b></label>
                <input class="form-control" type="text" placeholder="Enter Password" name="password"
                       value="DefaultPassword2019">
                <label for="Data Nascimento"><b> Data de Nascimento </b></label>
                <input class="form-control" type="text" placeholder="Enter Password" name="newpassword"
                       value="DefaultPassword2019">

                <br>
                <label for="Data Nascimento"><b> Data de Nascimento </b></label>
                <input class="form-control" type="date" placeholder="Enter Birth Date" name="data_Nascimento">
                <br>
                <label for="email"><b> Email</b></label>
                <input class="form-control" type="text" placeholder="Enter Email" name="email">
                <br>
                <label for="Autorizaçao"><b> Autorizaçao</b></label>
                <input class="form-control" type="number" placeholder="Enter Authorization" name="Autorizacao">
                <br>
                <button type="submit" class="btn btn-primary" name="NewCliente">Create</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </form>
        </div>


    </div>
</div>
</div>


</table>

<?php
$numrows=Utilizador::Counterrows();
$total_pages=($numrows%5);

$k = (($pn+4>$total_pages)?$total_pages-4:(($pn-4<1)?5:$pn));
$pagLink = "";
if($pn>=1){
    echo "<li><a href='index.php?page=Admin/adminclientes&asd=1'> << </a></li>";
    echo "<li><a href='index.php?page=Admin/adminclientes&asd=".($pn-1)."'> < </a></li>";
}

for ($i=-4; $i<=4; $i++) {
    if($k+$i==$pn)
        $pagLink .= "<li class='active'><a href='index.php?page=Admin/adminclientes&asd=".($k+$i)."'>".($k+$i)."</a></li>";
    else
        if($k+$i>=0) {
            $pagLink .= "<li><a href='index.php?page=Admin/adminclientes&asd=" . ($k + $i) . "'>" . ($k + $i) . "</a></li>";
        }
};
echo $pagLink;

if($pn<$total_pages){
    echo "<li><a href='index.php?page=Admin/adminclientes&asd=".($pn+1)."'> > </a></li>";
    echo "<li><a href='index.php?page=Admin/adminclientes&asd=".$total_pages."'> >> </a></li>";
}

?>
<div class="inline">
    <input id="pn" type="number" min="0" max="<?php echo $total_pages?>"
           placeholder="<?php echo $pn."/".$total_pages; ?>" required>
    <button onclick="go2Page();">Go</button>
</div>

</div>
</div>
<script>
    function go2Page()
    {
        var pn = document.getElementById("pn").value;
        pn = ((pn><?php echo $total_pages; ?>)?<?php echo $total_pages; ?>:((pn<1)?0:pn));
        window.location.href = 'index.php?page=Admin/adminclientes&asd='+pn;
    }
</script>

</div>
</div>

</body>
<?php
$_POST = array(); ?>