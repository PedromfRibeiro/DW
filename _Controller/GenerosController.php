<?php


class GenerosController
{
    public static function GetGeneros($id){
        $Gen = new Genero('','','');
        $Gen->idGenero=$id;
        return $Gen->Read();
    }
    public static function GetGenerosAll(){
        $Gen = new Genero('','','');
        return $Gen->ReadALL();
    }
}