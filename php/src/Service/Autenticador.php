<?php

namespace Php\Banco\Service;

use Php\Banco\Modelo\Autenticavel;
use Php\Banco\Modelo\Funcionario\Diretor;

class Autenticador
{
    public function tentaLogin(Autenticavel $autenticavel, string $senha):void
    {
     if($autenticavel->podeAutenticar($senha)) {
         echo "Ok. Usuário logado no sistema";
     } else {
         echo "Ops. Senha incorreta";
     }
    }
}