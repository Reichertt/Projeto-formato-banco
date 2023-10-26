<?php

namespace Alura\Banco\Service;

use Alura\Banco\Modelo\Funcionario\Funcionario;

class ControladorDeBonificacoes
{
    //As bonificações iniciam sempre no 0
    private $totalBonificacoes = 0;

    //As bonificações são inseridas para os funcionarios
    public function adicionaBonificacaoDe(Funcionario $funcionario)
    {
        $this->totalBonificacoes += $funcionario->calculaBonificacao();
    }

    //Verifica o total de bonificações que o funcionario teve
    public function recuperaTotal(): float
    {
        return $this->totalBonificacoes;
    }
}
