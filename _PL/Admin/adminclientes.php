<body>
<div class="container">
    <div class="table-wrapper">
        <div class="table-title">
            <div class="row">
                <div class="col-sm-6">
                    <h2>Manage <b>Cliente</b></h2>
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
            </tr>
            </thead>
            <?php

            require_once 'C:/xampp/htdocs/DWphp/_BL/Utilizador.php';
         $currentPage=0;
            $amountofrecords=4;
            $initialrecord=$currentPage*$amountofrecords;
            $lastrecord=($initialrecord+$amountofrecords);
            $POD = new Utilizador('', '', '', '', '', ' ', ' ', ' ', ' ');
            $BFetch = ($POD->ReadALL());
            for ($recordcounter = 0; $recordcounter<=$lastrecord && $recordcounter>=$initialrecord && $row = $BFetch->fetch() ; $recordcounter++) {
                echo '<tr>';

                echo '<td>' . $row['Nome'] . '</td>';
                echo '<td>' . $row['Data_Registo'] . '</td>';
                echo '<td>' . $row['Autorizacao'] . '</td>';
                echo '<td>' . $row['Data_Nascimento'] . '</td>';
                echo '<td>' . $row['email'] . '</td>';
                echo '<td>' . $row['code_hash'] . '</td>';
                echo '<td>' . $row['Verify'] . '</td>';

                echo '<td>';
                echo '<a  href="#editUtilizador" name="editUtilizador" class="edit"  data-toggle="modal" data-target="#myModal"><i class="material-icons" title="Edit" >&#xE254;</i></a>';
                echo '<a href="#deleteUtiizador" name="deleteUtilizador" class="delete"><i class="material-icons" title="Delete">&#xE872;</i></a>';
                echo '</td>';
                echo '</tr>';


            }
            $BFetch->closeCursor();
            $POD = null;



            /*require_once 'C:/xampp/htdocs/DWphp/_BL/Utilizador.php';
            $POD = new Utilizador('', '', '', '', '', ' ', ' ', ' ', ' ');
            $BFetch = ($POD->ReadALL());
            while ($row = $BFetch->fetch()) {
                echo '<tr>';

                echo '<td>' . $row['Nome'] . '</td>';
                echo '<td>' . $row['Data_Registo'] . '</td>';
                echo '<td>' . $row['Autorizacao'] . '</td>';
                echo '<td>' . $row['Data_Nascimento'] . '</td>';
                echo '<td>' . $row['email'] . '</td>';
                echo '<td>' . $row['code_hash'] . '</td>';
                echo '<td>' . $row['Verify'] . '</td>';

                echo '<td>';
                echo '<a  href="#editUtilizador" name="editUtilizador" class="edit"  data-toggle="modal" data-target="#myModal"><i class="material-icons" title="Edit" >&#xE254;</i></a>';
                echo '<a href="#deleteUtiizador" name="deleteUtilizador" class="delete"><i class="material-icons" title="Delete">&#xE872;</i></a>';
                echo '</td>';
                echo '</tr>';
            }
            $BFetch->closeCursor();
            $POD = null;

            */?>

            <!-- The Modal -->
            <div class="modal fade" id="myModal">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h4 class="modal-title">Atualizar Cliente</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>

                        <div class="modal-body" method="Post" >

                            <label for="Nome" ><b > Nome</b ></label >
                            <input class="form-control" type = "text" placeholder = "Enter Name" name = "Nome">

                            <br >

                            <label for="Autorizaçao" ><b > Autorizaçao</b ></label >
                            <input class="form-control" type = "number" placeholder = "Enter Authorization" name = "Autorizacao"  >

                            <br>

                            <label for="Data Nascimento" ><b > Data de Nascimento </b ></label >
                            <input class="form-control" type = "date" placeholder = "Enter Birth Date" name = "Data_Nascimento" >

                            <br >

                            <label for="email" ><b > Email</b ></label >
                            <input class="form-control" type = "text" placeholder = "Enter Email" name = "email" >

                            <br>

                            <label for="Verify" ><b > Verify</b ></label >
                            <input class="form-control" type = "number" placeholder = "Enter Verify" name = "Verify" >

                            <br>
<form method="post"><button type="submit" class="btn btn-primary" name="Create_Cliente">Create</button>
    <button type="submit" class="btn btn-primary" name="Update_Cliente">Save changes</button>
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
</form>
                             </div >

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
                <?php
                if(isset($nextpage)){
                    $paginaanterior=$_POST["pagina"];
                    $paginaatual=$paginaatual+1;
                    $_POST["pagina"]=$paginaatual;
                }
                ?>
            </ul>
        </div>
    </div>
</div>
</body>