<?php

namespace matematica {

    function Somar($a, $b, $c)
    {
        return $a + $b + $c;
    }

    function Subtrair($a, $b)
    {
        return $a - $b;
    }

    function Dividir($a, $b)
    {
        return $a / $b;
    }

    function Multiplicação($a, $b)
    {
        return $a * $b;
    }
}

namespace texto {
    function Contanar($nome, $sobrenome)
    {

        return $nome . " " . $sobrenome;
    }
}
