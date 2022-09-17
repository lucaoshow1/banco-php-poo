<?php

use Php\Banco\Modelo\CPF;
use Php\Banco\Modelo\Funcionario\Diretor;
use Php\Banco\Service\Autenticador;

require_once 'autolad.php';

    $autenticador = new Autenticador();
    $umDireitor = new Diretor('João da Silva', new CPF('123.123.123-32'), '12000');
    $autenticador->tentaLogin($umDireitor, '1234');