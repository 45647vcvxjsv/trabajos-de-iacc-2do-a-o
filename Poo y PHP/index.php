<?php

require_once("ClassOperation.php");

$operacion1 = new Operation(56, 88);

$totalsuma = $operacion1->getSuma();
echo $totalsuma;
echo "<br>";

$totalresta = $operacion1->getResta();
echo $totalresta;
echo "<br>";

$totalmultiplicar = $operacion1->getMultiplicar();
echo $totalmultiplicar;
echo "<br>";

$totaldiv = $operacion1->getDiv();
echo $totaldiv;
echo "<br>";

?>
