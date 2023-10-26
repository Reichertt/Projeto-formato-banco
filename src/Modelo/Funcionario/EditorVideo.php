<?php

namespace Alura\Banco\Modelo\Funcionario;

class EditorVideo extends Funcionario
{
    //calcula a bonificação baseado no salario
    public function calculaBonificacao(): float
    {
        return 600;
    }
}
