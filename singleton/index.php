<?php

require_once('../autoloader.php');

use Singleton\LogsSingleton;

$instancia = LogsSingleton::obterInstancia();
var_dump($instancia);
$novaInstancia = LogsSingleton::obterInstancia();
var_dump($novaInstancia);

if ($instancia === $novaInstancia) {
    echo 'As instâncias são exatamente as mesmas';
} 