<?php

require_once('../autoloader.php');

$bibliotecaFacade = new \Facade\BibliotecaFacade();

$codigoLivro = '123456';
$cpfCliente = '123456789';

$efetuouRetirada = $bibliotecaFacade->efetuaRetirada($codigoLivro, $cpfCliente);

if ($efetuouRetirada) {

    $bibliotecaFacade->disparaMensagens($codigoLivro, $cpfCliente, 'CHAVE_API', 'SENHA_API');

}