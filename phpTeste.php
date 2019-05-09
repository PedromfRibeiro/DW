<html>

<?php

require_once '_BL/Venda.php';
require_once '_BL/Stock.php';

$pp = new Venda('','2019-05-08','21','1','1','1');
$pp -> Create();

$oo = new Stock('0','33','1');
$oo -> Create();
?>

</html>