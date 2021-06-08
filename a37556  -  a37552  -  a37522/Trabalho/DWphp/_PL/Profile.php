<body>

<ul class="breadcrumb">
    <li><a href="http://localhost/DWphp/Index.php?page=MainPage">Home</a></li>
    <li>Profile</li>
</ul>

<?php   $BFetch = UserController::GetOneUtil(); ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card card-inverse" style="background-color: #808080; border-color: #808080; padding:40px 0 50px 0;">
                <div class="card-block">
                    <div class="row">
                        <div class="col-md-12  text-center">
                            <h2 class="card-title">Name: <?php echo $BFetch['Nome']; ?></h2>
                            <p class="card-text"><strong>Data de Registo: </strong> <?php echo $BFetch['Data_Registo']; ?> </p>
                            <p class="card-text"><strong>email: </strong> <?php echo $BFetch['email']; ?> </p>
                            <p class="card-text"><strong>Email Verificado: </strong>

                                <?php if( $BFetch['Verify']==1)echo'Sim'; else{echo 'Não';} ?>
                            </p>

                            <p class="card-text"><strong>Numero de Encomendas: </strong>
                                <?php $b=EncomendaController::Countby();
                                echo $b;?>
                            </p>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php


$u=null;

?>
</body>