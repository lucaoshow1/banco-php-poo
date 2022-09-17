<?php

namespace Php\Banco\Modelo;
 interface Autenticavel
{
     public function podeAutenticar(string $senha):bool;

}