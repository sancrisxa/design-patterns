<?php

namespace TemplateMethod;

class ImpostosEletronicos extends ImpostosAbstract
{
    protected function calculaImpostoVariavel(float $precoProduto): float
    {
        $precoProduto = ($precoProduto * 1.2);

        return $precoProduto;
    }

    protected function calculaImpostoAdicional(float $precoProduto): float
    {
        return $precoProduto - ($precoProduto * 0.1);
    }
}