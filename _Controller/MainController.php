<?php
require_once dirname(__FILE__)."/UserController.php";
session_start();

class MainController
{
    public static function process(){
        UserController::process1();

    }
}

