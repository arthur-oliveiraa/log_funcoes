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

namespace logica {
    function verificaIdade($idade)
    {
        if ($idade >= 18) {
            echo "Maior de idade";
        } else {
            echo "Menor de idade";
        }
    }
}
