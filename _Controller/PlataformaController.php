<?php


class PlataformaController
{
    public static function GetPlataforma($id){
        $Gen = new Plataforma('','','');
        $Gen->id=$id;
        return $Gen->Read();
    }
    public static function GetPlataformaALL(){
        $Gen = new Plataforma('','','');
        return $Gen->ReadALL();
    }

}