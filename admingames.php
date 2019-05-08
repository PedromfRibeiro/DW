<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <?php
    include '_Includes/Header.php';
    ?>
    <link href="_css/admingames.css" type="text/css" rel="stylesheet"/>
</head>
<body>
<div class="container">
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
                        <th>Name</th><th>preco</th><th>Descricao</th><th>Genero</th><th>Plataforma</th>
                    </tr>
                    </thead>
                    <tbody>
                <span class="custom-checkbox">
								<input type="checkbox" id="checkbox1" name="options[]" value="1">
								<label for="checkbox1"></label>
							</span>
                <?php
                require_once '_BL/Jogo.php';

                $pp= new Jogo('','wqrqweryyyyqwer','20','wergergerg','1','1');
                $pp-> Create();

                require_once '_BL/Jogo.php';
                require_once '_BL/Genero.php';

                $POD = new Jogo('','','','','','');
                $BFetch = ($POD->ReadALL());

                while ($row = $BFetch->fetch()) {


                    echo '<tr>';
                    echo '<td>' . $row['nome'] . '</td>';
                    echo '<td>' . $row['preco'] . '</td>';
                    echo '<td>' . $row['descricao'] . '</td>';
                    echo '<td>' . $row['idGenero'].'</td>';
                    echo '<td>' . $row['idPlataforma']. '</td>';
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

</div>
<div class="container">
    <div class="table-wrapper">
        <div class="table-title">
            <div class="row">
                <div class="col-sm-6">
                    <h2>Manage <b>Games</b></h2>
                </div>
                <div class="col-sm-6">
                    <a href="#addgames" class="btn btn-success" ><i class="material-icons">&#xE147;</i> <span>Add New Game</span></a>
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
                <th>Name</th>
                <th>Genero</th>
                <th>Plataforma</th>
                <th>Stock</th>
                <th>Preço</th>
                <th>Actions</th>
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
                <td>Counter-Strike: Global Offensive </td>
                <td>FPS</td>
                <td>Steam</td>
                <td>27</td>
                <th>19.99€</th>
                <td>
                    <a href="#editgames" class="edit" ><i class="material-icons" title="Edit">&#xE254;</i></a>
                    <a href="#deletegames" ><i class="material-icons" title="Delete">&#xE872;</i></a>
                </td>
            </tr>
            <tr>
                <td>
							<span class="custom-checkbox">
								<input type="checkbox" id="checkbox2" name="options[]" value="1">
								<label for="checkbox2"></label>
							</span>
                </td>
                <td>PLAYERUNKNOWN'S BATTLEGROUNDS</td>
                <td>FPS</td>
                <td>Steam</td>
                <td>43</td>
                <th>29.99€</th>
                <td>
                    <a href="#editgames" class="edit" ><i class="material-icons"  title="Edit">&#xE254;</i></a>
                    <a href="#deletegames" class="delete" ><i class="material-icons"  title="Delete">&#xE872;</i></a>
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






















<!-- Footer -->
<section id="footer">
    <div class="container">
        <div class="row text-center text-xs-center text-sm-left text-md-left">
            <div class="col-xs-12 col-sm-4 col-md-3">

                <ul class="list-unstyled quick-links">
                    <li><a href="Index.php#AboutUs"><i class="fa fa-angle-double-right"></i>About Us</a></li>
                    <li><a href="Index.php#Customer"><i class="fa fa-angle-double-right"></i>Customer Support</a></li>
                    <li><a href="Index.php#FAQ"><i class="fa fa-angle-double-right"></i>FAQ</a></li>

                </ul>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4">

                <ul class="list-unstyled quick-links">
                    <li><a href=""><i class="fa fa-angle-double-right"></i>Terms and Conditions</a></li>
                    <li><a href=""><i class="fa fa-angle-double-right"></i>Privacy Policy</a></li>
                    <li><a href=""><i class="fa fa-angle-double-right"></i>Commissions and Fees</a></li>

                </ul>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4">

                <ul class="list-unstyled quick-links">
                    <li class="list-inline-item"><a href=""><i class="fa fa-facebook"></i></a></li>
                    <li class="list-inline-item"><a href=""><i class="fa fa-twitter"></i></a></li>
                    <li class="list-inline-item"><a href=""><i class="fa fa-instagram"></i></a></li>
                    <li class="list-inline-item"><a href=""><i class="fa fa-google-plus"></i></a></li>
                    <li class="list-inline-item"><a href="" target="_blank"><i class="fa fa-envelope"></i></a></li>

                    <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2  text-white">
                        <p class="h6">&copy ClassicGamer.net All right Reversed</a></p>
                    </div>
                </ul>
            </div>
        </div>

    </div>
</section>
<!-- ./Footer -->


</html>