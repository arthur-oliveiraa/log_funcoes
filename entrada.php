<?php

require_once "biblioteca.php";

use function matematica\Somar;
use function texto\Contanar;

echo "Resultado: ", Somar(1, 1, 1), "\n";
echo "nome Completo: ", Contanar("Arthur", "Basilio"), "\n";
