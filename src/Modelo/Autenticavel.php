<?php

namespace Alura\Banco\Modelo;

//Faz a verificação da semha
interface Autenticavel
{
    public function podeAutenticar(string $senha): bool;
}
