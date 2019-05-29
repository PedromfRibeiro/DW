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
                echo '<a href="#deleteUtiizador" onclick="this" class="delete"><i class="material-icons" title="Delete">&#xE872;</i></a>';
                echo '</td>';
                echo '</tr>';
            }
            $BFetch->closeCursor();
            $POD = null;

            ?>

            <!-- The Modal -->
            <div class="modal" id="myModal">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h4 class="modal-title">Modal Heading</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>

                        <form class="form-container" >
                            <h1> Atuzalizar Cliente</h1 >

                            <label for="Nome" ><b > Nome</b ></label >
                            <inxuired >

                                <br >

                                <label for="Data de Registo" ><b > Data de Registo </b ></label >
                                <input type = "date" placeholder = "Enter Register Date" name = "Dta_Registo" required >

                                <br >

                                <label for="Autorizaçao" ><b > Autorizaçao</b ></label >
                                <input type = "number" placeholder = "Enter Authorization" name = "Autorizacao" required >

                                <label for="Data Nascimento" ><b > Data de Nascimento </b ></label >
                                <input type = "date" placeholder = "Enter Birth Date" name = "Data_Nascimento" required >

                                <br >

                                <label for="email" ><b > Email</b ></label >
                                <input type = "text" placeholder = "Enter Email" name = "email" required >

                                <label for="Verify" ><b > Verify</b ></label >
                                <input type = "number" placeholder = "Enter Verify" name = "Verify" required >

                                <button type = "submit" class="btn" > Update</button >
                                <button type = "button" class="btn cancel" onclick = "closeForm()" > Close</button >
                        </form >

                    </div>
                </div>
            </div>

                <script >
                    function openForm()
                    {
                        document . getElementById("myForm") . style . display = "block";
                    }

                    function closeForm()
                    {
                        document . getElementById("myForm") . style . display = "none";
                    }
                </script >

                        <div class="form-popup" id = "myForm" >
                            <form class="form-container" >
                                <h1> Atuzalizar Cliente</h1 >

                                <label for="Nome" ><b > Nome</b ></label >
                                <inxuired >

                                <br >

                                <label for="Data de Registo" ><b > Data de Registo </b ></label >
                                <input type = "date" placeholder = "Enter Register Date" name = "Dta_Registo" required >

                                <br >

                                <label for="Autorizaçao" ><b > Autorizaçao</b ></label >
                                <input type = "number" placeholder = "Enter Authorization" name = "Autorizacao" required >

                                <label for="Data Nascimento" ><b > Data de Nascimento </b ></label >
                                <input type = "date" placeholder = "Enter Birth Date" name = "Data_Nascimento" required >

                                <br >

                                <label for="email" ><b > Email</b ></label >
                                <input type = "text" placeholder = "Enter Email" name = "email" required >

                                <label for="Verify" ><b > Verify</b ></label >
                                <input type = "number" placeholder = "Enter Verify" name = "Verify" required >

                                <button type = "submit" class="btn" > Update</button >
                                <button type = "button" class="btn cancel" onclick = "closeForm()" > Close</button >
                            </form >
                        </div >
                        

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