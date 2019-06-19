<?php
require_once('../autoloader.php');

use FactoryMethod\TeslaFactory;
use FactoryMethod\DodgeFactory;

$teslaFactory = new TeslaFactory();
$dodgeFactory = new DodgeFactory();

try {
    $teslaModeloS = $teslaFactory->criarCarro('modelo_s');
    $teslaModeloX = $teslaFactory->criarCarro('modelo_x');

    $dodgeCharger = $dodgeFactory->criarCarro('charger');
    $dodgeDart = $dodgeFactory->criarCarro('dart');
} catch (Exception $e) {
    echo $e->getMessage();
}

echo $teslaModeloS->acelerar();
echo $teslaModeloS->frear();
echo $teslaModeloS->trocarMarcha();
echo $teslaModeloX->acelerar();
echo $teslaModeloX->frear();
echo $teslaModeloX->trocarMarcha();
echo $dodgeCharger->acelerar();
echo $dodgeCharger->frear();
echo $dodgeCharger->trocarMarcha();
echo $dodgeDart->acelerar();
echo $dodgeDart->frear();
echo $dodgeDart->trocarMarcha();