<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <?php
    require '_Includes/Header.php';
    ?>
    <link href="_css/admingeneros.css" type="text/css" rel="stylesheet"/>

</head>
<body>

<div class="Section P1">
    <div class="Content">
        <div class="container">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-6">
                            <h2>Manage <b>Generos</b></h2>
                        </div>
                        <div class="col-sm-6">
                            <a href="#addgeneros" class="btn btn-success" ><i class="material-icons">&#xE147;</i> <span>Add New Genero</span></a>
                        </div>
                    </div>
                </div>
                <table class="table table-striped table-hover">
                    <thead>
                    <tr>
                        <th>Name</th>
                    </tr>
                    </thead>
                    <tbody>
                <span class="custom-checkbox">
								<input type="checkbox" id="checkbox1" name="options[]" value="1">
								<label for="checkbox1"></label>
							</span>
                <?php

                require_once '_BL/Genero.php';

                $POD = new Genero('','');
                $BFetch = ($POD->ReadALL());
                while ($row = $BFetch->fetch()) {
                    echo '<tr>';

                    echo '<td>' . $row['genero'] . '</td>';
                    echo '<td>
                        <a href="#editgeneros" onclick="this" class="edit" ><i class="material-icons" title="Edit" >&#xE254;</i></a>
                        <a href="#deletegeneros" onclick="this" class="delete"><i class="material-icons" title="Delete">&#xE872;</i></a>
                    </td>';
                    echo '</tr>';
                }
$POD=null;
                ?>
                    </tbody>
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
        <?php
        $row=null;
        $POD=null;
        $BFetch=null;
        ?>

    </div>






    <div class="Content">
        <div class="container">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-6">
                            <h2>Manage <b>Plataformas</b></h2>
                        </div>
                        <div class="col-sm-6">
                            <a href="#addgeneros" class="btn btn-success" ><i class="material-icons">&#xE147;</i> <span>Add New Genero</span></a>
                        </div>
                    </div>
                </div>
                <table class="table table-striped table-hover">
                    <thead>
                    <tr>
                        <th>Name</th>
                    </tr>
                    </thead>
                    <tbody>
                <span class="custom-checkbox">
								<input type="checkbox" id="checkbox1" name="options[]" value="1">
								<label for="checkbox1"></label>
							</span>
                <?php
                require_once '_BL/Plataforma.php';

                $GetPlat = new Plataforma('','');
                $PlatFetch = ($GetPlat->ReadALL());

                while ($rowPlat = $PlatFetch->fetch()) {
                    echo '<tr>';


                    echo '<td>' . $rowPlat['Plataforma'] . '</td>';
                    echo '<td>

                        <a href="#editgeneros"   class="edit" ><i class="material-icons" title="Edit" >&#xE254;</i></a>
                        <a href="#deletegeneros" class="delete"><i class="material-icons" title="Delete">&#xE872;</i></a>

                    </td>';
                    echo '</tr>';
                }
                ?>
                    </tbody>

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

    </div>
</div>


</body>
</html>