<?php


class JogoController
{
    public static function processJogo()
    {

        if (isset($_POST["Compra"])) {
            self::Compra();
        }
    }
    public static function Compra(){}
}