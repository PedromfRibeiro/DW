<html>

<?php

require_once '_BL/Encomenda.php';
require_once '_BL/Plataforma.php';
require_once '_BL/Genero.php';
require_once '_BL/Jogo.php';
require_once '_BL/Stock.php';
require_once '_BL/Utilizador.php';
require_once '_BL/Venda.php';

$plataforma = new Plataforma('','');
$Genero     = new Genero('','');
$Stock      = new Stock('','','');
$Utilizador = new Utilizador('','','','','');
$Encomenda  = new Encomenda('','','','');
$Jogo       = new Jogo('','','','','','');
$Venda      = new Venda('','','','','','');


//--------Create Tables-------------

    $plataforma -> CreateDB();
    $Genero->CreateDB();
    $Stock->CreateDB();
    $Utilizador->CreateTable();
    $Encomenda->CreateTable();
    $Jogo->CreateTable();
    $Venda->CreateTable();

//----------------------------------

//--------Create-------------
$plataforma->Plataforma = 'Acme';
$plataforma->Create();
$plataforma->Create();
$plataforma->Create();

//--------Read-------------
$plataforma->id = '1';
$plataforma->Plataforma = '';
$rr=($plataforma->Read());
echo "id: {$rr['id']} - Plataforma: {$rr['Plataforma']}<br />";

//--------Read ALL-------------
$plataforma->id = '';
$PlatFetch = ($plataforma->ReadALL());
while ($rowPlat = $PlatFetch->fetch()) {echo "Plataforma: {$rowPlat['Plataforma']}<br />";}
//--------Update-------------
$plataforma->id = '2';
$plataforma->Plataforma = 'Alterado o 2 Campo';
$plataforma->Update();
//--------Delete-------------
$plataforma->id ='3';
$plataforma->Delete();

$arr=array("Action","Adventure","Anime","Casual","Co-op","Fighting","FPS","Horror","Simulation","MMO","Courses","Open-World","Indie","Point&Click","Puzzle","Racing","RPG","Simulation","Sport","StoryRich","Strategy","Survival","3PS","VRGames","Subscription");
foreach($arr as &$value){
    $Genero-> genero =$value;
    $Genero->Create();}
?>

</html>