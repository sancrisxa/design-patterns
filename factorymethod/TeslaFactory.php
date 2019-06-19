<?php
namespace FactoryMethod;

use FactoryMethod\Product\CarroProduct;
use FactoryMethod\Product\TeslaModeloX;
use FactoryMethod\Product\TeslaModeloS;

class TeslaFactory implements CarroFactory
{
    public function criarCarro(string $modeloCarro) : CarroProduct
    {
        if ($modeloCarro == 'modelo_x') {
            return new TeslaModeloX();
        } elseif ($modeloCarro == 'modelo_s') {
            return new TeslaModeloS();
        } else {
            throw new \Exception("Modelo de carro \"{$modeloCarro}\" não existe no sistema.");
        }
    }
}