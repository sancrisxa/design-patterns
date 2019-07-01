<?php
namespace Memento;

class Texto
{
    protected $texto;

    protected $textoCareTaker;

    public function __construct()
    {
        $this->textoCareTaker = new TextoCareTaker();
        $this->texto = '';
    }

    public function escreverTexto(string $texto)
    {
        $this->textoCareTaker->adicionaMemento(new TextoMemento($this->texto));
        $this->texto .= $texto;
    }

    public function desfazerEscrita()
    {
        $this->texto = $this
        ->textoCareTaker
        ->retornarUltimoEstadoSalvo()
        ->getTexto();
    }

    public function retornarTexto(): string
    {
        return $this->texto;
    }
}