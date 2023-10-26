<?php

namespace Alura\Banco\Modelo\Conta;

// Tarifa cobrada sempre que um saque é solicitado
class ContaPoupanca extends Conta
{
    protected function percentualTarifa(): float
    {
        return 0.03;
    }
}
