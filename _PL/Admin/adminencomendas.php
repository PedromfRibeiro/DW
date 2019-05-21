<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <?php
    include '_includes/Header.php';
    ?>
    <link href="../../_css/adminencomendas.css" type="text/css" rel="stylesheet"/>

</head>
<body>
<div class="container">
    <div class="table-wrapper">
        <div class="table-title">
            <div class="row">
                <div class="col-sm-6">
                    <h2>Manage <b>Encomendas</b></h2>
                </div>
                <div class="col-sm-6">
                    <a href="#addencomendas" class="btn btn-success" ><i class="material-icons">&#xE147;</i> <span>Add New encomenda</span></a>
                </div>
            </div>
        </div>
        <table class="table table-striped table-hover">
            <thead>
            <tr>
                <th>
							<span class="custom-checkbox">
								<input type="checkbox" id="selectAll">
								<label for="selectAll"></label>
							</span>
                </th>
                <th>Nome</th>
                <th>Produtos</th>
                <th>Data de encomenda</th>
                <th>Data de entrega</th>
                <th>Custo</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>
							<span class="custom-checkbox">
								<input type="checkbox" id="checkbox1" name="options[]" value="1">
								<label for="checkbox1"></label>
							</span>
                </td>
                <td>Miguel Gonçalves </td>
                <td>PLAYERUNKNOWN'S BATTLEGROUNDS</td>
                <td> 26/03/2019</td>
                <td>3/05/2019</td>
                <td>29.99</td>
                <td>
                    <a href="#editgeneros" class="edit" ><i class="material-icons" title="Edit">&#xE254;</i></a>
                    <a href="#deletegeneros" class="delete"><i class="material-icons" title="Delete">&#xE872;</i></a>
                </td>
            </tr>
            <tr>
                <td>
							<span class="custom-checkbox">
								<input type="checkbox" id="checkbox2" name="options[]" value="1">
								<label for="checkbox2"></label>
							</span>
                </td>
                <td>Pedro Ribeiro</td>
                <td>PLAYERUNKNOWN'S BATTLEGROUNDS,Counter-Strike: Global Offensive</td>
                <td> 13/03/2019</td>
                <td>23/05/2019</td>
                <td>49.98</td>
                <td>
                    <a href="#editgeneros" class="edit" ><i class="material-icons"  title="Edit">&#xE254;</i></a>
                    <a href="#deletegeneros" class="delete" ><i class="material-icons"  title="Delete">&#xE872;</i></a>
                </td>
            </tr>

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

</body>
<?php
include '_includes/Footer.php';
?>
</html>