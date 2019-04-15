<?php


public class Genero
{
   public $id;
   public $genero;

    public function __construct($ID, $gen)
    {
        $this->id = $ID;
        $this->genero = $gen;
    }

        public function Create()     {}
        public function Update()     {}
        public function Read()       {}
        public function Delete()     {}
        public function CreateTable(){}

}