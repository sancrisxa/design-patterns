<?php

namespace Strategy;

class CompressaoContext
{
    private $compressaoStrategy;

    public function __construct(CompressaoStrategy $compressaoStrategy)
    {
        $this->compressaoStrategy = $compressaoStrategy;
    }

    public function setCompresssaoStrategy(CompresssaoStrategy $compressaoStrategy)
    {
        $this->compressaoStrategy = $compressaoStrategy;
    }

    public function comprimir(string $caminhoArquivo)
    {
        $this->compressaoStrategy->comprimir($caminhoArquivo);
    }
}