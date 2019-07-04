<?php 

namespace Strategy;

abstract class CompressaoStrategy
{
    public function renomearArquivosEmOrdem()
    {
        echo 'Arquivos renomeados';
    }

    abstract public function comprimir(string $caminhoArquivos): bool;
}