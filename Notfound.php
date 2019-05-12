<?php
include 'ErrorPage.php';

if (!CheckAccess())

{

    header('HTTP/1.0 404 Not Found');

    exit;

}

//access granted, normal flow

echo 'OK';
?>
