<html>

<?php

require_once '_BL/Encomenda.php';
require_once '_BL/Plataforma.php';
require_once '_BL/Genero.php';
require_once '_BL/Jogo.php';
require_once '_BL/Stock.php';
require_once '_BL/Utilizador.php';
require_once '_BL/Venda.php';

$date = "2012-08-06";
$date=date("Y-m-d",strtotime($date));

$plataforma = new Plataforma('','');
$Genero     = new Genero('','aa');
$Stock      = new Stock('','11','1');
$Utilizador = new Utilizador('','Joao',$date,'0',$date,'umemail@hotmail.com');
$Encomenda  = new Encomenda('','0000-00-00','1','1');
$Jogo       = new Jogo('','Rise of DW','20.0','Lorum','1','1');
$Venda      = new Venda('','20-01-2019','20.0','1','1','1');


//--------Create Tables-------------

    $plataforma -> CreateDB();
    $Genero->CreateDB();
    $Stock->CreateDB();
    $Utilizador->CreateTable();
    $Encomenda->CreateTable();
    $Jogo->CreateTable();
    $Venda->CreateTable();

//----------------------------------

$Genero->Create();
$Stock->Create();
$Jogo->Create();
$Encomenda->Create();
$Venda->Create();
$Encomenda->idEncomenda= '2';
$Encomenda->Finalizada= '0';
$Encomenda->Update();

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