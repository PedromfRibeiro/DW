<?php
function CheckAccess()

{

    $result = (isset($_SERVER['PHP_AUTH_USER']) &&

        $_SERVER['PHP_AUTH_USER'] == 'nome' &&

        $_SERVER['PHP_AUTH_PW'] == 'password');

    if (!$result)

    {

        header('WWW-Authenticate: Basic realm=“Test restricted area”');

        header('HTTP/1.0 401 Unauthorized');

        return false;

    }

    else

        return true;

}



?>
