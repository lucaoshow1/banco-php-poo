<?php

namespace Php\Banco\Modelo\Funcionario;

use Php\Banco\Modelo\Autenticavel;

class Gerente extends Funcionario implements Autenticavel
{
    public function calculaBonificacao():float
    {
        return $this->recuperaSalario();
    }

    public function podeAutenticar(string $senha): bool
    {
        return $senha === '4321';
    }
}