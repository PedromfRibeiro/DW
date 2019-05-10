<html>

<?php

require_once '_BL/Encomenda.php';
require_once '_BL/Plataforma.php';
require_once '_BL/Genero.php';
require_once '_BL/Jogo.php';
require_once '_BL/Stock.php';
require_once '_BL/Utilizador.php';
require_once '_BL/Venda.php';

$plataforma = new Plataforma('','');  $plataforma -> CreateDB();
$Genero     = new Genero('',''); $Genero->CreateDB();
$Stock      = new Stock('','',''); $Stock->CreateDB();
$Utilizador = new Utilizador('','','','','');$Utilizador->CreateTable();
$Encomenda  = new Encomenda('','','','');$Encomenda->CreateTable()


?>

</html>