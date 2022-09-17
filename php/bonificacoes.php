<?php

require_once 'autolad.php';

use Php\Banco\Modelo\{CPF};
use Php\Banco\Modelo\Funcionario\{Desenvolvedor, Diretor, EditorDeVideo, Funcionario, Gerente};
use Php\Banco\Service\ControladorDeBonificacoes;

$umFuncionario = new Desenvolvedor
                ('Lucas Gomes', new CPF
                ('177.716.167-39'),
                 1000 );
$umFuncionario -> sobeDeNivel();


$umaFuncionario = new Gerente(
                'Patricia Almeida', new CPF
               ('912.423.152-23'),
                3000 );

$umDiretor = new Diretor(
               'Tiago Nunes', new CPF
              ('142.543.321-43'),
               5000 );


$umDesenvolvedor = new Desenvolvedor(
             'Felipe Nogueira Santos', new CPF
            ('123.521.561-11'),
             3650 );

$umEditor = new EditorDeVideo(
              'Patrick Novaes Souza', new CPF
             ('111.111.334-22'),
              '2974');

$controlador = new ControladorDeBonificacoes();
$controlador->adicionaBonificacaoDe($umaFuncionario);
$controlador->adicionaBonificacaoDe($umFuncionario);
$controlador->adicionaBonificacaoDe($umDiretor);
$controlador->adicionaBonificacaoDe($umDesenvolvedor);
$controlador->adicionaBonificacaoDe($umEditor);

echo $controlador->recuperaTotal();