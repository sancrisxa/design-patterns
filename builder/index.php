<?php
require_once('../autoloader.php');

$montadoraDeFoguetesTestI = new Builder\FabricaFoguetesDirector(new Builder\FogueteModeloIBuilder());
$montadoraDeFoguetesTestII = new Builder\FabricaFoguetesDirector(new Builder\FogueteModeloIIBuilder());

$montadoraDeFoguetesTestI->construirFoguete();
echo $montadoraDeFoguetesTestI->getFoguete() . "<br>";

$montadoraDeFoguetesTestII->construirFoguete();
echo $montadoraDeFoguetesTestII->getFoguete() . "<br>";