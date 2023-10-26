<?php

namespace Alura\Banco\Modelo\Conta;

class ContaCorrente extends Conta
{
    // Tarifa cobrada sempre que um saque é solicitado
    protected function percentualTarifa(): float
    {
        return 0.05;
    }

    //Verifica se a conta atual possui saldo, transferi e subitrai o valor da conta que transferiu
    public function transfere(float $valorATransferir, Conta $contaDestino): void
    {
        if ($valorATransferir > $this->saldo) {
            echo "Saldo indisponível";
            return;
        }
        $this->saca($valorATransferir);
        $contaDestino->deposita($valorATransferir);
    }
}