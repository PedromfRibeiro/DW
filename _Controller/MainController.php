<?php
require_once dirname(__FILE__)."/UserController.php";


class MainController
{
    public static function process(){
        session_start();
        UserController::process1();
    }
}

