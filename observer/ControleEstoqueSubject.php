<?php

namespace Observer;

class ControleEstoqueSubject implements Subject
{
    private $observers;

    public function atualizaEstoqueProduto(string $codigoProduto, int $novaQuantidade): bool
    {

        // Simula a atualização de estoque de um produto.

        if ($novaQuantidade == 0) {

            $this->notificaObservers($codigoProduto);
        }
    }

    public function adicionaObserver(Observer $observer)
    {
        $this->observers[] = $observer;
    }

    public function removerObserver(Observer $observerRemover): bool
    {
        foreach ($this->observers as $index => $observer) {
            if ($observer === $observerRemover) {
                unset($this->observers[$index]);
                return true;
            }
        }

        return false;
    }

    public function notificarObservers(string $codigoProduto)
    {
        foreach ($this->observers as $observer) {
            $observer->atualizado($codigoProduto);
        }
    }
}