<?php

require_once dirname(__FILE__) . "/UserController.php";

/*class MainController
{
    public static $main_menu{
    'home' -> {
        'text' ->'Home';
        'url' ->'index.php?page=home'
        },

'produtos' ->{
    'text'-> 'Produtos';
            'url' -> 'index.php?page=produto/list'
},

'user/register' ->{
    'text'-> 'Register';
            'url' -> 'index.php?page=user/register'


},

};
}

incluir o MainController.php nas paginas a controlar


public static function process(){
UserController::process();
ProdutoController::process();

}