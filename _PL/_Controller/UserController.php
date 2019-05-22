<?php

require_once  "C:/xampp/htdocs/DWphp/_BL/Utilizador.php";

class UserController
{

    public static function Login(){


try
{
        if(empty($_POST["email"]) || empty($_POST["password"]))
        {
            $_SESSION["message"] = '<label>All fields are required</label>';
            echo $_SESSION["message"];

        }
        else
        {
            $uu = new Utilizador('','','','','','','','','');
            $uu->email=$_POST["email"];
            $uu->pass= sha1($_POST['password']);;

            $statement=$uu->Read();

            if(!($statement['Verify']==1)){
                $_SESSION["message"]="Conta não verificada, verifique o seu email!";
               echo $_SESSION["message"];

            }
            else if($statement > 0)
            {
                $_SESSION["email"] = $_POST["email"];
                $_SESSION["message"]="Log In com sucesso";
                echo $_SESSION['message'];
                ?>
                <a href="?page=Login/Sucess">A</a>
                <?php
            }
            else
            {
                $_SESSION["message"] = '<label>Wrong Data</label>';
               echo $_SESSION["message"];
            }
        }
    }

catch(PDOException $error)
{
    $_SESSION["message"] = $error->getMessage();
}

    }








    public static function process()
    {
        if (isset($_POST{'user-register'})) {
            //($_POST);mostra variavel simples. para debug
            $user = new Utilizador('','','','','','','','','');
            $user->email = $_POST('email');
            $user->pass = $_POST('password');
            $user->create();
        } else if (isset($_POST['user-email'])){

        self::processemail();
    }else if(isset($_GET['logout'])){
            self::processLogout();
        }
        }

    private static function processemail(){
        $user = new Utilizador('','','','','','','','','');
        $user-> email = $_POST('email');
        $user-> pass = $_POST('password');
        if($user-> ReadEmail()){
            $_SESSION['userid'] = $user->idUtilizador;
        }
    }

    public static function processLogout(){
        $_SESSION=[];
    }

    public static function isUserLoggedIn(){
        return(isset($_SESSION['userid']));
    }

    public static function getLoggedUser(){
        $user=null;
        $userid = isset($_SESSION['userid']) ? $_SESSION['userid'] : null;
        if($userid !=null){
            $user =new User();
            $user-> id =$userid;
            if($user->readById()){
                $user=null;
            }
        }
        return($user);
    }
// adicionar no index opçao logout

    public static function IsUserLoggedAdmin(){
        $res =false;
        $user= self::getLoggedUser();
        if($user !=null && $user=admin == 1){
            $res =true;
        }
        return($res);
    }


}