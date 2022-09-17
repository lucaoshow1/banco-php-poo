<?php

use Php\Banco\Modelo\Endereco;

/**
 * @package Php\Banco\Modelo
 * @property-read string $cidade
 * @property-read string $bairro
 * @property-read string $numero
 * @property-read string $rua
 */
require_once 'autolad.php';

    $umEndereco = new Endereco('nova iguaçu', 'aa', 'bb', '33A');
    $outroEndereco = new Endereco('Belford Roxo', 'Azon', 'AMA', '431 apt 2');

        echo $umEndereco->cidade;