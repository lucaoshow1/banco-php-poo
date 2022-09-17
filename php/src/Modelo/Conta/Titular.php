<?php

namespace Php\Banco\Modelo\Conta;

use Php\Banco\Modelo\Autenticavel;
use Php\Banco\Modelo\Pessoa;
use Php\Banco\Modelo\CPF;
use Php\Banco\Modelo\Endereco;

class Titular extends Pessoa implements Autenticavel
{
    private $endereco;

    public function __construct(CPF $cpf, string $nome, Endereco $endereco)
    {
        parent::__construct($nome, $cpf);
        $this->endereco = $endereco;
    }

    public function recuperaEndereco(): Endereco
    {
        return $this->endereco;
    }

    public function podeAutenticar(string $senha): bool
    {
        return $senha === 'abcd';
    }
}
