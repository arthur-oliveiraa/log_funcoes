<?php

require_once "biblioteca.php";

use function logica\verificaExercito;
use function matematica\Somar;
use function texto\Contanar;
use function logica\verificaIdade;

echo "Nome Completo: ", Contanar("Arthur", "Basilio"), "\n";
echo "Status: ", verificaIdade(16), "\n";
echo "Resultado: ", Somar(1, 1, 1), "\n";
echo "Alistamento: ", verificaExercito("masculino", 16), "\n";
