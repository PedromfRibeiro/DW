<?php


class UserController
{
    public static function process()
    {
        if (isset($_POST{'user-register'})) {
            //($_POST);mostra variavel simples. para debug
            $user = new User();
            $user->login = $_POST('login');
            $user->password = $_POST('password');
            $user->create();
        } else if (isset($_POST['user-login'])){

        self::processLogin();
    }else if(isset($_GET['logout'])){
            self::processLogout();
        }
        }

    private static function processLogin(){
        $user = new User;
        $user-> login = $_POST('login');
        $user-> password = $_POST('password');
        if($user-> readByLoginandPassword()){
            $_SESSION['userid'] = $user->id;
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