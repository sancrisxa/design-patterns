<?php
namespace Facade;

class ModuloEmail
{
    public function validaServidorDeEmails() : bool
    {
        return true;
    }

    public function enviaMensagem(
        string $nomeRemetente,
        string $nomedestinatario,
        string $enderecoEmailDestinatario,
        string $mensagem
    ) : bool {

        echo "Email enviado com sucesso. \n";

    }
}