<?php
namespace Facade;

class ModuloControleEstoque
{
    public function registraRetirada(string $codigoDoLivro, int $cpfDoCliente) : bool
    {
        return true;
    }

    public function validaEstoque(string $codigoDoLivro) : bool
    {
        echo "Registro de retirada efetuado com sucesso. \n";
        return true;
    }
}