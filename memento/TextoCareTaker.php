<?php
namespace Memento;

class TextoCareTaker
{
    protected $estadoTexto = [];
    
    public function adicionaMemento(TextoMemento $textoMemento)
    {
        $this->estadoTexto[] = $textoMemento;
    }

    public function retornarUltimoEstadoSalvo(): TextoMemento
    {
        if (empty($this->estadoTexto)) {
            return null;
        }

        $testoMemento = end($this->estadoTexto);
        unset($this->estadoTexto[sizeof($this->estadoTexto) - 1 ]);

        return $testoMemento;
    }
}