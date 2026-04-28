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
            return "Maior de idade";
        } else {
            return "Menor de idade";
        }
    }
    function verificaExercito($sexo, $idade)
    {
        if ($sexo == "masculino" && $idade >= 18) {
            return "Você deve se alistar no exército";
        } else {
            return "Alistamento não obrigatório";
        }
    }
}
