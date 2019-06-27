<?php
namespace Facade;

class ModuloControleClientes
{
    public function buscaCliente(string $cpfCliente) : array
    {
        return [
            'nome' => 'Gabriel Anhaia',
            'telefone' => '999999999',
            'email' => 'gabriel@mestredev.com.br'
        ];
    }
}