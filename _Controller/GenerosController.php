<?php


class GenerosController
{
    public static function GetGeneros($id){
        $Gen = new Genero('','','');
        $Gen->idGenero=$id;
        return $Gen->Read();
    }
}