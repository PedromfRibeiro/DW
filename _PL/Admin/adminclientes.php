<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <?php
    include '../_includes/Head.php';
    ?>
    <link href="../../_css/admingames.css" type="text/css" rel="stylesheet"/>

</head>
<body>
<div class="container">
    <div class="table-wrapper">
        <div class="table-title">
            <div class="row">
                <div class="col-sm-6">
                    <h2>Manage <b>Cliente</b></h2>
                </div>
                <div class="col-sm-6">
                    <a href="#addCliente" class="btn btn-success" ><i class="material-icons">&#xE147;</i> <span>Add New Cliente</span></a>

                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#modelId">
                        Add User
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
                         aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Modal title</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Email address</label>
                                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Password</label>
                                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                        </div>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save</button>
                                </div>
                            </div>
                        </div>
                    </div>


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
            $POD = new Utilizador('' ,'','','','',' ',' ',' ',' ');
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

                    echo '<td>
                        <a href="#editUtilizador" onclick="this" class="edit" ><i class="material-icons" title="Edit" >&#xE254;</i></a>
                        <a href="#deleteUtiizador" onclick="this" class="delete"><i class="material-icons" title="Delete">&#xE872;</i></a>
                    </td>';
                    echo '</tr>';
                }$POD=null;
            ?>
        </table>
        <div class="clearfix">
            <div class="hint-text">Showing <b>1</b> out of <b>25</b> entries</div>
            <ul class="pagination">
                <li class="page-item disabled"><a href="#">Previous</a></li>
                <li class="page-item active"><a href="#" class="page-link">1</a></li>
                <li class="page-item"><a href="#" class="page-link">2</a></li>
                <li class="page-item"><a href="#" class="page-link">3</a></li>
                <li class="page-item"><a href="#" class="page-link">4</a></li>
                <li class="page-item"><a href="#" class="page-link">5</a></li>
                <li class="page-item"><a href="#" class="page-link">Next</a></li>
            </ul>
        </div>
    </div>
</div>

</body>
</html>
