<?php

use Alura\Banco\Modelo\Conta\{ContaPoupanca, ContaCorrente, Titular};
use Alura\Banco\Modelo\{CPF, Endereco};

require_once 'autoload.php';

//É uma conta poupança
$conta = new ContaPoupanca(
    new Titular(
        new CPF('123.456.789-10'),
        'Vitor Reichert Gonçalves',
        new Endereco('Palhoça', 'bairro Teste', 'Rua lá', '37')
    )
);
//Valor atual
$conta->deposita(600);
//Valor sacado
$conta->saca(100);

echo $conta->recuperaSaldo();
