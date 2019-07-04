<?php

namespace Strategy;

class ComprimirRar extends CompressaoEstrategy
{
    public function comprimir(): bool
    {
        echo 'Arquivo comprimido no formato ".RAR"';
        return true;
    }    
}