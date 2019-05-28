<style>
    body {font-family: Arial, Helvetica, sans-serif;}
    * {box-sizing: border-box;}

    /* The popup form - hidden by default */
    .form-popup {
        display: none;
        position: fixed;
        right: 15px;
        border: 3px solid #f1f1f1;
        z-index: 9;
    }

    /* Add styles to the form container */
    .form-container {
        max-width: 300px;
        padding: 10px;
        background-color: white;
    }

    /* Full-width input fields */
    .form-container input[type=text], .form-container input[type=password] {
        width: 100%;
        padding: 15px;
        margin: 5px 0 22px 0;
        border: none;
        background: #f1f1f1;
    }

    /* When the inputs get focus, do something */
    .form-container input[type=text]:focus, .form-container input[type=password]:focus {
        background-color: #ddd;
        outline: none;
    }

    /* Set a style for the submit/login button */
    .form-container .btn {
        background-color: #4CAF50;
        color: white;
        padding: 16px 20px;
        border: none;
        cursor: pointer;
        width: 100%;
        margin-bottom:10px;
        opacity: 0.8;
    }

    /* Add a red background color to the cancel button */
    .form-container .cancel {
        background-color: red;
    }

</style>
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
                        <a href="#editUtilizador" name="editUtilizador" onclick="openForm()" class="edit" ><i class="material-icons" title="Edit" >&#xE254;</i></a>
                <div class="form-popup" id="myForm">
                        <form class="form-container">
                        <h1>Login</h1>

                        <label for="email"><b>Email</b></label>
                        <input type="text" placeholder="Enter Email" name="email" required>

                        <label for="psw"><b>Password</b></label>
                        <input type="password" placeholder="Enter Password" name="psw" required>

                        <button type="submit" class="btn">Login</button>
                        <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
                    </form>
                </div>

                <script>
                    function openForm() {
                        document.getElementById("myForm").style.display = "block";
                    }

                    function closeForm() {
                        document.getElementById("myForm").style.display = "none";
                    }
                </script>
                        
                        
                        
                        
                        
                        
                        <a href="#deleteUtiizador" onclick="this" class="delete"><i class="material-icons" title="Delete">&#xE872;</i></a>
                    </td>';
                    echo '</tr>';
                }$BFetch->closeCursor();
                $POD=null;

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
