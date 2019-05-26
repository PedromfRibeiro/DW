<?php

require_once dirname(__FILE__)."/../_BL/Utilizador.php";

class UserController
{
    public static function process1(){

        if (isset($_POST["login"])) {
            self::Login();
        }
        if (isset($_POST['register'])) {
            self::Register();
        }
        if (isset($_POST['Ativar'])){
            self::VerifyEmail();
        }
        if (isset($_POST['Reset'])){
            self::Reset();
        }





    }

        public static function Login(){
            $main="0";
            if(empty($_POST["email"]) || empty($_POST["password"]))
            {
                $typ = "error";
                $_SESSION["Mesg"]='Missing data to continue';
            }
            else {
                $uu = new Utilizador('', '', '', '', '', '', '', '', '');

                $uu->email = $_POST["email"];
                $uu->pass = sha1($_POST['password']);;

                $statement = $uu->Read();

                if (!($statement['Verify'] == 1)){
                    $typ = "warning";
                    $_SESSION["Mesg"]='Email nao verificado! Por favor verifique o seu email!';
                }
                else if ($statement>0) {
                    $typ = "success";
                    $_SESSION["Mesg"]='Sucess to LogIn!';
                    $main="1";
                    $_SESSION["email"]=$_POST["email"];
                }
                else {
                    $typ = "error";
                    $_SESSION["Mesg"]='Something went Wrong!';
                }
            }
            self::AnimatedNotify($typ,$_SESSION["Mesg"],$main);
        }

        public static function Register(){

            function Checkmail(){

                $chk = new Utilizador('', '', '', '', '', '', '', '', '');
                $chk->email =$_POST['email'];
                $check=$chk->ReadEmail();

                if (empty($_POST['email']))
                {$_SESSION["Mesg"]= "Email is empty!"; return true;}

                else if($check>0)
                {$_SESSION["Mesg"]= "The email is already in use!";return true;}

                else if(!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
                {$_SESSION["Mesg"]= "Please make sure your email adress is valid";return true;}

                return false;}

            function pass(){
                $array1=$_POST['password'];
                $array2=$_POST['newpassword'];


                if (empty($_POST['password']) || empty($_POST['newpassword'])) {
                    $_SESSION["Mesg"]= "Password is empty!"; return true;}

                else if ((strcmp($array1,$array2))!==0){
                    $_SESSION["Mesg"]= "The two passwords you entered dont match, try again!"; return true;}

                else if (strlen($_POST['password']) < 8 || strlen($_POST['password']) > 24){
                    $_SESSION["Mesg"]= "Password too short!";return true;}

                else if (!preg_match("#[0-9]+#", $_POST['password'])) {
                    $_SESSION["Mesg"]= "Password must include at least one number!";return true;}

                else if (!preg_match("#[a-zA-Z]+#", $_POST['password'])) {
                    $_SESSION["Mesg"] = "Password must include at least one letter!";return true;}

                else{return false;}
            }

            function Birth($birth){
                $d1 = new DateTime("$birth");
                $d2 = new DateTime("now");
                $diff = $d1->diff($d2);
                $uu=$diff->y;

                if($uu<16){
                    $_SESSION["Mesg"]= "You Need to be above 16 to register in our Website!";
                    return true; }

                if(empty($birth)){
                    $_SESSION["Mesg"]= "Birth date is required";
                    return true; }

                else {return false;}
            }


            if (empty($_POST["Nome"])) {
                $typ = "error";$main="0"; $_SESSION["Mesg"]= "All fields are required";}

            else if (Checkmail() || pass() || (Birth($_POST['data_Nascimento']))) {
                $typ = "error";
                $main="0";
                self::AnimatedNotify($typ,$_SESSION["Mesg"],$main);
                return false;
            }
            else {

                $uu = new Utilizador('', '', '', '', '', '', '', '', '');
                $uu->Nome = $_POST["Nome"];
                $uu->email = $_POST["email"];
                $uu->pass =  sha1($_POST['password']);
                $uu->Data_Registo = Date("now");
                $uu->Data_Nascimento = $_POST["data_Nascimento"];
                $uu->code_hash = md5(rand(0, 1000));
                $uu->Verify = '0';


                $statement = $uu->Read();

                if ($statement > 0) {
                    $_SESSION["Mesg"]= "Data already exist!";
                    $typ = "error";$main="0";
                } else {
                    $uu->Create();

                    $typ ="success";
                    $_SESSION["Mesg"]="Thank you to sign in! Check you email to confirm!";
                    $main="1";

                    $to = $_POST["email"];
                    $subject = 'Acount Verification(The Classic Gamer)';
                    $headers = 'From:TheClassicGamerComp@gmail.com';
                    $mail = '
                Hello ' . $_POST["Nome"] . ',
Thank you for Signing up!
Please Click This link to activate your account:
http://localhost/DWphp/_PL/Index.php?page=Login/Verify&email=' . $uu->email . '&code_hash=' . $uu->code_hash;
                    mail($to, $subject, $mail, $headers);
                    self::AnimatedNotify($typ,$_SESSION["Mesg"],$main);

                }

            }

            self::AnimatedNotify($typ,$_SESSION["Mesg"],$main);



        }

        public static function VerifyEmail(){
            $main=0;
            $typ="error";
            if (isset($_GET['email']) && !empty($_GET['email']) AND isset($_GET['code_hash']) && !empty($_GET['code_hash'])) {



                $verify = new Utilizador('', '', '', '', '', '', '', '', '');
                $verify->email = $_GET['email'];
                $verify->code_hash = $_GET['code_hash'];

                $result_of_Verify = $verify->ReadVerify();
                if (empty($result_of_Verify)) {
                    $_SESSION["Mesg"] = "Account has already been activated or the URL is invalid!";

                } else {
                    $_SESSION["Mesg"] = "Your Account has been activated!";
                    $verify->code_hash = md5(rand(0, 1000));
                    $verify->Verify = '1';
                    $verify->UpdateVerify();
                    $_SESSION["Mesg"] = "Account has been activated !";
                    $typ = "sucess";
                    $main=1;
                }
            }
            else {
                $_SESSION["Mesg"] = "Invalid parameters provided for account verification!";
                self::AnimatedNotify($typ,$_SESSION["Mesg"],$main);

            }
            self::AnimatedNotify($typ,$_SESSION["Mesg"],$main);

        }

        public static function Reset(){

            if(isset($_GET['email']) && !empty($_GET['email']) AND isset($_GET['code_hash']) && !empty($_GET['code_hash'])){

                $email=$_GET['email'];
                $code_hash=$_GET['code_hash'];

                $rss = new Utilizador('', '', '', '', '', '', '', '', '');

                $rss->email=$email;
                $rss->code_hash=$code_hash;
                $check=$rss->ReadEmailHash();

                if(empty($check)){
                    $_SESSION['message'] ="Invalid URL for password reset!";
                    header("Location: error.php");
                }}
            else{
                $_SESSION['message'] ="Sorry, Verification failed,try again!";
                header("Location: error.php");

            }


            ?>
        }



    public static function AnimatedNotify($typ,$Mesg,$main){?>
        <script>
            Swal.fire({
                position: 'center',
                type: '<?php echo $typ?>',
                title: '<?php echo $Mesg?>',
                showConfirmButton: false,
                timer: 2000
            })</script>
        <?php

        if($main==1){?>
            <script>
                setTimeout(function(){window.location="?page=MainPage"}, 2350);
            </script>
            <?php
        }
    }

    public static function isUserLoggedIn(){
        return(isset($_SESSION["email"]));
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