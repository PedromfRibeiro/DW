<body>

<ul class="breadcrumb">
    <li><a href="http://localhost/DWphp/Index.php?page=MainPage">Home</a></li>
    <li>Profile</li>
</ul>

<?php   $BFetch = UserController::GetOneUtil(); ?>


<div class="container">
    <div class="row profile">
        <div class="col-md-3">
            <div class="profile-sidebar">
                <div class="profile-usertitle">
                    <div class="profile-usertitle-name">
                        <?php echo  $BFetch['Nome']; ?>
                    </div>
                    <div class="profile-usertitle-email">
                        <?php echo  $BFetch['email']; ?>
                        <?php echo  $BFetch['code_hash']; ?>
                    </div>
                </div>
                <div class="profile-userbuttons">
                    <button type="button" class="btn btn-success btn-sm">Follow</button>
                    <button type="button" class="btn btn-danger btn-sm">Message</button>
                </div>

                <div class="profile-usermenu">
                    <ul class="nav">
                        <li class="active">
                            <a href="#">
                                <i class="glyphicon glyphicon-home"></i>
                                Overview </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="glyphicon glyphicon-user"></i>
                                Account Settings </a>
                        </li>
                        <li>
                            <a href="#" target="_blank">
                                <i class="glyphicon glyphicon-ok"></i>
                                Tasks </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="glyphicon glyphicon-flag"></i>
                                Help </a>
                        </li>
                    </ul>
                </div>
                <!-- END MENU -->
            </div>
        </div>
        <div class="col-md-9">
            <div class="profile-content">
                Some user related content goes here...
            </div>
        </div>
    </div>
</div>'

<?php


$u=null;

?>
</body>