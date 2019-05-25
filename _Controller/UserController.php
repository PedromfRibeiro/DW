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


    }
        
    public static function Login(){
        $main="0";
        if(empty($_POST["email"]) || empty($_POST["password"]))
        {
            $typ = "error";
            $Mesg='Missing data to continue';
        }
        else {
            $uu = new Utilizador('', '', '', '', '', '', '', '', '');

            $uu->email = $_POST["email"];
            $uu->pass = sha1($_POST['password']);;

            $statement = $uu->Read();

            if (!($statement['Verify'] == 1)){
                $typ = "warning";
                $Mesg='Email nao verificado! Por favor verifique o seu email!';
            }
            else if ($statement>0) {
                $typ = "success";
                $Mesg='Sucess to LogIn!';
                $main="1";
                $_SESSION["email"]=$_POST["email"];
            }
            else {
                $typ = "error";
                $Mesg='Something went Wrong!';
            }
        }
        self::AnimatedNotify($typ,$Mesg,$main);
    }
    
    public static function Register(){



        function pass(&$Mesg){
            if (empty($_POST['password']) || empty($_POST['newpassword'])) {$Mesg= "Password is empty!";}
            if (!(strcmp($_POST['password'],$_POST['newpassword']))){$Mesg = "The two password you entered don't match, try again!";}
            if (strlen($_POST['password']) < 8 || strlen($_POST['password']) > 24){$Mesg= "Password too short!";}
            if (!preg_match("#[0-9]+#", $_POST['password'])) {$Mesg= "Password must include at least one number!";}
            if (!preg_match("#[a-zA-Z]+#", $_POST['password'])) {$Mesg = "Password must include at least one letter!";}


        }






        function Checkmail(&$Mesg){

            $chk = new Utilizador('', '', '', '', '', '', '', '', '');
            $chk->email =$_POST['email'];
            $check=$chk->ReadEmail();

               if (empty($_POST['email'])) {$Mesg= "Email is empty!"; return true;}
               else if($check>0){$Mesg= "The email is already in use!";return true;}
               else if(!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){$Mesg= "Please make sure your email adress is valid";return true;}
               //else if ($_POST['email'] == trim($_POST['email']) && strpos($_POST['email'], ' ') !== true){$Mesg= "Please make sure your email adress is valid";return true;}
            return false;}
        function Birth($birth,&$Mesg){
            $d1 = new DateTime("$birth");
            $d2 = new DateTime("now");
            $diff = $d1->diff($d2);
            $uu=$diff->y;

            if($uu<16){$Mesg= "You Need to be above 16 to register in our Website!"; return true; }
            if(empty($_POST["data_Nascimento"])){$Mesg= "Birth date is required";    return true; }
            else return false;
        }

         $date = date("D M d, Y G:i");

            if (empty($_POST["Nome"])) { $typ = "error";$main="0"; $Mesg= "All fields are required";}
            if (Checkmail($Mesg) || pass($Mesg) || Birth($_POST['data_Nascimento'],$Mesg)){$typ = "error"; $main="0";self::AnimatedNotify($typ,$Mesg,$main);return false;}
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
                    $Mesg= "Data already exist!";
                    $typ = "error";$main="0";
                } else {
                    $uu->Create();

                    $typ ="success";
                    $Mesg="Thank you to sign in! Check you email to confirm!";
                    $main="1";

                    $to = $_POST["email"];
                    $subject = 'Acount Verification(The Classic Gamer)';
                    $headers = 'From:TheClassicGamerComp@gmail.com';
                    $mail = '
                Hello ' . $_POST["Nome"] . ',
Thank you for Signing up!
Please Click This link to activate your account:
http://localhost/DWphp/Login/Verify.php?email=' . $uu->email . '&code_hash=' . $uu->code_hash;

                    mail($to, $subject, $mail, $headers);

                }
            }
        self::AnimatedNotify($typ,$Mesg,$main);

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