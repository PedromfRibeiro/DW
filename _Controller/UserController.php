<?php

require_once dirname(__FILE__) . "/../_BL/Utilizador.php";

class UserController
{
    public static function process1()
    {

        if (isset($_POST["login"])) {
            self::Login();
        }
        if (isset($_POST['register'])) {
            self::Register();
        }
        if (isset($_POST['LogOut'])) {
            self::Logout();
        }
        if ($_GET['page'] == "Login/Verify") {
            self::VerifyEmail();
        }
        if (isset($_POST['forgot'])) {
            self::Reset1form();
        }
        if (isset($_POST['Reset'])) {
            self::Reset2part();
        }


    }

    public static function Login()
    {
        $_SESSION["Controll"]["Type"] = "error";

        if (empty($_POST["email"]) || empty($_POST["password"])) {
            $_SESSION["Controll"]["Mensage"] = 'Missing data to continue';
        } else {

            $uu = new Utilizador('', '', '', '', '', '', '', '', '');
            $uu->email = $_POST["email"];
            $uu->pass = sha1($_POST['password']);;
            $statement = $uu->Read();

            if (!($statement['Verify'] == 1)) {
                $_SESSION["Controll"]["Type"] = "warning";
                $_SESSION["Controll"]["Mensage"] = 'Email nao verificado! Por favor verifique o seu email!';
            } else if ($statement > 0) {
                $_SESSION["email"] = $_POST["email"];
                $_SESSION["Controll"]["Type"] = "success";
                $_SESSION["Controll"]["Mensage"] = 'success to LogIn!';
                header("Location: index.php?page=MainPage");
                exit();
            } else {
                $_SESSION["Controll"]["Mensage"] = 'Something went Wrong!';
            }
        }
    }

    public static function Register()
    {
        $_SESSION["Controll"]["Type"] = "error";

        function Checkmail()
        {

            $chk = new Utilizador('', '', '', '', '', '', '', '', '');
            $chk->email = $_POST['email'];
            $check = $chk->ReadEmail();

            if (empty($_POST['email'])) {
                $_SESSION["Controll"]["Mensage"] = "Email is empty!";
                return true;
            } else if ($check > 0) {
                $_SESSION["Controll"]["Mensage"] = "The email is already in use!";
                return true;
            } else if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                $_SESSION["Controll"]["Mensage"] = "Please make sure your email adress is valid";
                return true;
            }

            return false;
        }

        function pass()
        {
            $array1 = $_POST['password'];
            $array2 = $_POST['newpassword'];


            if (empty($_POST['password']) || empty($_POST['newpassword'])) {
                $_SESSION["Controll"]["Mensage"] = "Password is empty!";
                return true;
            } else if ((strcmp($array1, $array2)) !== 0) {
                $_SESSION["Controll"]["Mensage"] = "The two passwords you entered dont match, try again!";
                return true;
            } else if (strlen($_POST['password']) < 8 || strlen($_POST['password']) > 24) {
                $_SESSION["Controll"]["Mensage"] = "Password too short!";
                return true;
            } else if (!preg_match("#[0-9]+#", $_POST['password'])) {
                $_SESSION["Controll"]["Mensage"] = "Password must include at least one number!";
                return true;
            } else if (!preg_match("#[a-zA-Z]+#", $_POST['password'])) {
                $_SESSION["Controll"]["Mensage"] = "Password must include at least one letter!";
                return true;
            } else {
                return false;
            }
        }

        function Birth($birth)
        {
            $d1 = new DateTime("$birth");
            $d2 = new DateTime("now");
            $diff = $d1->diff($d2);
            $uu = $diff->y;

            if ($uu < 16) {
                $_SESSION["Controll"]["Mensage"] = "You Need to be above 16 to register in our Website!";
                return true;
            }

            if (empty($birth)) {
                $_SESSION["Controll"]["Mensage"] = "Birth date is required";
                return true;
            } else {
                return false;
            }
        }


        if (empty($_POST["Nome"])) {
            $_SESSION["Controll"]["Mensage"] = "All fields are required";
        } else if (Checkmail() || pass() || (Birth($_POST['data_Nascimento']))) {
            return false;
        } else {

            $uu = new Utilizador('', '', '', '', '', '', '', '', '');
            $uu->Nome = $_POST["Nome"];
            $uu->email = $_POST["email"];
            $uu->pass = sha1($_POST['password']);
            $uu->Data_Registo = Date("now");
            $uu->Data_Nascimento = $_POST["data_Nascimento"];
            $uu->code_hash = md5(rand(0, 1000));
            $uu->Verify = '0';


            $statement = $uu->Read();

            if ($statement > 0) {
                $_SESSION["Controll"]["Mensage"] = "Data already exist!";
            } else {
                $uu->Create();
                $_SESSION["Controll"]["Type"] = "success";
                $_SESSION["Controll"]["Mensage"] = "Thank you to sign in! Check you email to confirm!";


                $to = $_POST["email"];
                $subject = 'Acount Verification(The Classic Gamer)';
                $headers = 'From:TheClassicGamerComp@gmail.com';
                $mail = '
                Hello ' . $_POST["Nome"] . ',
Thank you for Signing up!
Please Click This link to activate your account:
http://localhost/DWphp/_PL/Index.php?page=Login/Verify&email=' . $uu->email . '&code_hash=' . $uu->code_hash;
                mail($to, $subject, $mail, $headers);
            }
        }
    }

    public static function VerifyEmail()
    {
        $_SESSION["Controll"]["Type"] = "error";

        if (isset($_GET['email']) && !empty($_GET['email']) AND isset($_GET['code_hash']) && !empty($_GET['code_hash'])) {

            $verify = new Utilizador('', '', '', '', '', '', '', '', '');
            $verify->email = $_GET['email'];
            $verify->code_hash = $_GET['code_hash'];

            $result_of_Verify = $verify->ReadVerify();
            if (empty($result_of_Verify)) {
                $_SESSION["Controll"]["Mensage"] = "Account has already been activated or the URL is invalid!";
                header("Location: index.php?page=MainPage");
                exit();
            } else {
                $verify->code_hash = md5(rand(0, 1000));
                $verify->Verify = '1';
                $verify->UpdateVerify();
                $_SESSION["Controll"]["Mensage"] = "Account has been activated!";
                $_SESSION["Controll"]["Type"] = "success";
                header("Location: index.php?page=MainPage");
                exit();
            }
        } else {
            $_SESSION["Controll"]["Mensage"] = "Invalid parameters provided for account verification!";
            header("Location: index.php?page=MainPage");
            exit();
        }
    }

    public static function Reset1form()
    {
        $_SESSION["Controll"]["Type"] = "error";

        $chk = new Utilizador('', '', '', '', '', '', '', '', '');
        $chk->email = $_POST['email'];
        $check = $chk->ReadEmail();

        if (empty($check)) {
            $_SESSION["Controll"]["Mensage"] = "User with that email dosen't exist!";
        } else {
            $chk->Verify = '0';
            $chk->code_hash = md5(rand(0, 1000));
            $chk->UpdateVerify();
            $email = $_POST['email'];
            $check = $chk->ReadEmail();
            $name = $check[1];
            $hash = $check[7];

            $_SESSION["Controll"]["Type"] = "success";
            $_SESSION["Controll"]["Mensage"] = "<p>Please check your email<span>$email</span>" . "for a confirmation link to complete password reset!</p>";

            $to = $_POST["email"];
            $subject = 'Password Resset(The Classic Gamer)';
            $headers = 'From:TheClassicGamerComp@gmail.com';
            $msg = '  Hello ' . $name . ',
Please Click This link to Reset your password:
http://localhost/DWphp/_PL/Index.php?page=Login/Reset&email=' . $email . '&code_hash=' . $hash;

            mail($to, $subject, $msg, $headers);
        }
    }

    public static function Reset2part()
    {

        if (isset($_GET['email']) && !empty($_GET['email']) AND isset($_GET['code_hash']) && !empty($_GET['code_hash'])) {

            $email = $_GET['email'];
            $code_hash = $_GET['code_hash'];

            $rss = new Utilizador('', '', '', '', '', '', '', '', '');

            $rss->email = $email;
            $rss->code_hash = $code_hash;
            $check = $rss->ReadEmailHash();

            if (empty($check)) {
                $_SESSION["Controll"]["Mensage"] = "Invalid URL for password reset!";
            } else {
                $_SESSION["Controll"]["Mensage"] = "Sorry, Verification failed,try again!";

            }


        }

        $_SESSION["Controll"]["Type"] = "error";


        function checkPassword($pwd, $pwd2)
        {

            if (empty($pwd)) {
                $_SESSION["Controll"]["Mensage"] = "Password is empty!";
                return true;
            }
            if (empty($pwd2)) {
                $_SESSION["Controll"]["Mensage"] = "Password is empty!";
                return true;
            }

            if (strlen($pwd) < 8 || strlen($pwd) > 24) {
                $_SESSION["Controll"]["Mensage"] = "Password too short!";
                return true;
            }

            if (!preg_match("#[0-9]+#", $pwd)) {
                $_SESSION["Controll"]["Mensage"] = "Password must include at least one number!";
                return true;
            }

            if (!preg_match("#[a-zA-Z]+#", $pwd)) {
                $_SESSION["Controll"]["Mensage"] = "Password must include at least one letter!";
                return true;
            } else return false;
        }


        if ($_POST['newpassword'] == $_POST['confirmpassword']) {


            $email = $_POST['email'];
            $code_hash = $_POST['code_hash'];
            $rss = new Utilizador('', '', '', '', '', '', '', '', '');

            $rss->email = $email;
            $rss->code_hash = $code_hash;
            $check = $rss->Reademail();

            if (empty($check)) {
                $_SESSION["Controll"]["Mensage"] = "User with that email dosen't exist!";


            }
            if (checkPassword($_POST['newpassword'], $_POST['confirmpassword'])) {
            } else {
                $rss->Nome = $check['Nome'];
                $rss->pass = sha1($_POST['newpassword']);
                $rss->Data_Registo = $check['Data_Registo'];
                $rss->Autorizacao = $check['Autorizacao'];
                $rss->Data_Nascimento = $check['Data_Nascimento'];
                $rss->email = $check['email'];
                $rss->Verify = '1';

                $rss->code_hash = md5(rand(0, 1000));
                $rss->Update();

                $_SESSION["Controll"]["Type"] = "success";


                $_SESSION["Controll"]["Mensage"] = "Your Password has been updated!";

            }
        } else {
            $_SESSION["Controll"]["Mensage"] = "The two password you entered don't match, try again!";
        }
    }

    public static function isUserLoggedIn()
    {

        return (isset($_SESSION["email"]));
    }

    public static function Logout()
    {
        session_destroy();
        $_SESSION = array();
        session_start();
        $_SESSION["Controll"]["Type"] = "success";
        $_SESSION["Controll"]["Mensage"] = "Logout efetuado";
        header("Location: index.php?page=MainPage");
        exit();
    }

    public static function IsUserLoggedAdmin()
    {
        if(!empty(self::isUserLoggedIn())){
            $uu = new Utilizador('', '', '', '', '', '', '', '', '');
            $uu->email = $_SESSION["email"];
            $statement = $uu->ReadEmail();
                if($statement['Autorizacao']==1){
                    return $_SESSION['admin']="1";
                }
        }
        return (isset($_SESSION['admin']));
    }

    public static function AnimatedNotify($typ, $Mesg)
    {
        print
            "<script>
            Swal.fire({
                position: 'center',
                type: '$typ',
                title: '$Mesg',
                showConfirmButton: false,
                timer: 2000
            })</script>";
    }

}