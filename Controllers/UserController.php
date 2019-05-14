<?php


class UserController
{
    public static function process()
    {
        if (iset($_POST{'user-register'})) {
            //($_POST);mostra variavel simples. para debug
            $user =new User();
            $user->login = $_POST('login');
            $user->password= $_POST('password');
            $user->create();
        }
    }


}