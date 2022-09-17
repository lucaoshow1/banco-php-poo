<?php

namespace Php\Banco\Modelo\Funcionario;

use Php\Banco\Modelo\Autenticavel;

class Diretor extends Funcionario implements Autenticavel
{
    public function calculaBonificacao():float
    {
        return $this->recuperaSalario() * 2;
    }

    public function podeAutenticar(string $senha): bool
    {
        return $senha === '1234';

    }


}