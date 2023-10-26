<?php

namespace Alura\Banco\Modelo\Funcionario;

class Desenvolvedor extends Funcionario
{
    public function sobeDeNivel()
    {
        $this->recebeAumento($this->recuperaSalario() * 0.75);
    }

    //calcula a bonificação baseado no salario
    public function calculaBonificacao(): float
    {
        return 500.0;
    }
}
