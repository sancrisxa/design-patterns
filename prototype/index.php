<?php
require_once ('../autoloader.php');

$compradores = [

    'Gabriel Anhaia',
    'Andreson Scherer',
    'Braian Ottoni'

];

$livroPHP = new \Prototype\LivroPHPPrototype();
$livroPHP->setTitulo('Padrões de Projeto em PHP 7.2');

$livros = [];

foreach ($compradores  as $nomeComprador) {

    $livroComprador = clone $livroPHP;
    $livroComprador->setNomeTitular($nomeComprador);

    $livros[] = $livroComprador;
}

print_r($livros);