<?php

require_once dirname(__FILE__)."/../_BL/Utilizador.php";

class UserController
{

    public static function Login(){
        if(isset($_POST["login"]))
        {
            try{

        if(empty($_POST["email"]) || empty($_POST["password"]))
        {
            $_SESSION["message"] = '<label>All fields are required</label>';
            echo $_SESSION["message"];

        }

        else {
            $uu = new Utilizador('', '', '', '', '', '', '', '', '');
            $uu->email = $_POST["email"];
            $uu->pass = sha1($_POST['password']);;

            $statement = $uu->Read();

            if (!($statement['Verify'] == 1)) {
                $_SESSION["message"] = "Conta não verificada, verifique o seu email!";
                echo $_SESSION["message"];

            } else if ($statement > 0) {
                $_SESSION["email"] = $_POST["email"];
                $_SESSION["message"] = "Log In com sucesso";
                echo $_SESSION['message'];
                ?>
                <a href="?page=Login/Sucess">A</a>
                <?php
            } else {
                $_SESSION["message"] = '<label>Wrong Data</label>';
                echo $_SESSION["message"];
            }
        }}



catch(PDOException $error)
{
    $_SESSION["message"] = $error->getMessage();
}

    }}

    public static function Register(){


        require_once 'C:/xampp/htdocs/DWphp/_BL/Utilizador.php';

        function checkPassword($pwd,&$msg) {

            if (empty($pwd)) {
                $msg= "Password is empty!";
                return true;
            }
            if (strlen($pwd) < 8 || strlen($pwd) > 24) {
                $msg= "Password too short!";
                return true;
            }

            if (!preg_match("#[0-9]+#", $pwd)) {
                $msg= "Password must include at least one number!";
                return true;
            }

            if (!preg_match("#[a-zA-Z]+#", $pwd)) {
                $msg = "Password must include at least one letter!";
                return true;
            }
            else return false;
        }

        function checkEmail($email,&$msg){
            $chk = new Utilizador('', '', '', '', '', '', '', '', '');
            $chk->email =$email;
            $check=$chk->ReadEmail();

            if (empty($email)) {
                $msg= "Email is empty!";
                return true;
            }

            if($check>0){
                $msg = '<label>The email is already in use!</label>';
                return true;
            }
            if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
                $msg = '<label>Please make sure your email adress is valid</label>';
                return true;}
            if ($email == trim($email) && strpos($email, ' ') !== false) {
                $msg = '<label>Please make sure your email adress is valid</label>';
                return true;
            }

            else return false;
        }

        function CheckBirth($birth,&$msg){
            $d1 = new DateTime("$birth");
            $d2 = new DateTime("now");
            $diff = $d1->diff($d2);
            $uu=$diff->y;

            if($uu<16){
                $_SESSION['message']  = "You Need to be above 16 to register in our Website!";
                return true;
            }
            if(empty($_POST["data_Nascimento"])){$msg = '<label>Birth date is required</label>'; return true; }


            else return false;
        }

        try {
            if (isset($_POST['register'])) {

                $date = date("D M d, Y G:i");

                $email = !empty($_POST['email']) ? trim($_POST['email']) : null;
                $pass = !empty($_POST['password']) ? trim($_POST['password']) : null;

                if (empty($_POST["Nome"])) {$message = '<label>All fields are required</label>';}
                if (   checkEmail   ($_POST['email']   ,$message)
                    || checkPassword($_POST["password"],$message)
                    || CheckBirth   ($_POST['data_Nascimento']   ,$message) ){}
                if(1){$_SESSION['message']  = "The two password you entered don't match, try again!";}
                else {
                    $uu = new Utilizador('', '', '', '', '', '', '', '', '');
                    $uu->Nome = $_POST["Nome"];
                    $uu->email = $_POST["email"];
                    $uu->pass =  sha1($_POST['password']);
                    $uu->Data_Registo = $date;
                    $uu->Data_Nascimento = $_POST["data_Nascimento"];
                    $uu->code_hash = md5(rand(0, 1000));
                    $uu->Verify = '0';


                    $statement = $uu->Read();

                    if ($statement > 0) {
                        $message = '<label>Data already exist!</label>';

                    } else {
                        $message = '<label>Thank you for registering with our website.</label>';
                        $uu->Create();


                        $to = $_POST["email"];
                        $subject = 'Acount Verification(The Classic Gamer)';
                        $headers = 'From:TheClassicGamerComp@gmail.com';
                        $msg = '
                Hello ' . $_POST["Nome"] . ',
Thank you for Signing up!
Please Click This link to activate your account:
http://localhost/DWphp/Login/Verify.php?email=' . $uu->email . '&code_hash=' . $uu->code_hash;

                        mail($to, $subject, $msg, $headers);


                    }
                }
            }
        }
        catch(PDOException $error)
        {
            $message = $error->getMessage();
        }





    }
    
    public static function process()
    {
        if (isset($_POST{'user-register'})) {
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
        return(isset($_SESSION['email']));
    }

    public static function Logout(){
        session_destroy();
        $_SESSION = array();
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

    public static function IsUserLoggedAdmin(){
        $res =false;
        $user= self::getLoggedUser();
        if($user !=null && $user=admin == 1){
            $res =true;
        }
        return($res);
    }


}