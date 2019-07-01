<?php 

namespace Decorator;

abstract class PersonagemDecorator extends Personagem
{
    protected $personagem;

    public function __construct(Personagem $personagem)
    {
        $this->personagem = $personagem;
    }

    public function getNome(): string
    {
        return $this->personagem->getNome();
    }

    public function getAtaque(): float
    {
        return $this->personagem->getAtaque() + $this->ataque;
    }
}