<?php

//funções em PHP


//CODIGO SOMAR

function Somar($a, $b, $c)
{
    return $a + $b + $c;
}
function Subtrair($a, $b)
{
    return $a - $b;
}

function Divisao($a, $b)
{
    return $a / $b;
}

function Multiplicacao($a, $b)
{
    return $a * $b;
}

// Criar função dividir (v4) e multiplicar (v5)
echo "Resultado: ", Multiplicacao(10, 2);
